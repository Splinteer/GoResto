CREATE DATABASE goresto;

USE goresto;

CREATE TABLE category (
    id      bigint UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name    varchar(255) NOT NULL
);

CREATE TABLE restaurant (
    id          bigint UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    category_id bigint NOT NULL REFERENCES category(id),
    email       char(255) NOT NULL UNIQUE,
    password    char(128),
    name        varchar(255) NOT NULL,
    logo        varchar(255)
);

CREATE TABLE restaurant_address (
    id              bigint UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    restaurant_id   bigint NOT NULL REFERENCES restaurant(id),
    line1           varchar(255) NOT NULL,
    line2           varchar(255),
    locality        varchar(255) NOT NULL,
    region          varchar(255) NOT NULL,
    zipcode         varchar(255) NOT NULL,
    country         varchar(255) NOT NULL,
    telephone       varchar(255),
    lat             float(10, 6) NOT NULL,
    lng             float(10, 6) NOT NULL
);

CREATE TABLE currency (
    id      bigint UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name    varchar(255) NOT NULL,
    code    char(5) NOT NULL,
    symbol  char(3) NOT NULL
);

CREATE TABLE product (
    id              bigint UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    restaurant_id   bigint NOT NULL REFERENCES restaurant(id),
    currency_id     bigint NOT NULL REFERENCES currency(id),
    name            varchar(255) NOT NULL,
    price           decimal(6,2) NOT NULL,
    image           text
);

CREATE TABLE supplement (
    id              bigint UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    restaurant_id   bigint NOT NULL REFERENCES restaurant(id),
    currency_id     bigint REFERENCES currency(id),
    name            varchar(255) NOT NULL,
    price           decimal(6,2) DEFAULT 0,
    image           text
);

CREATE TABLE product_supplement (
    product_id  bigint NOT NULL REFERENCES product(id),
    supplement_id   bigint NOT NULL REFERENCES supplement(id),
    CONSTRAINT product_supplement_pkey PRIMARY KEY (product_id, supplement_id)
);

CREATE TABLE menu (
    id              bigint UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    restaurant_id   bigint NOT NULL REFERENCES restaurant(id),
    currency_id     bigint NOT NULL REFERENCES currency(id),
    name            varchar(255) NOT NULL,
    price           decimal(6,2) NOT NULL,
    image           text
);

CREATE TABLE menu_product (
    menu_id     bigint NOT NULL REFERENCES menu(id),
    product_id  bigint NOT NULL REFERENCES product(id),
    CONSTRAINT menu_product_pkey PRIMARY KEY (menu_id, product_id)
);

CREATE TABLE promotion (
    id              bigint UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    currency_id     bigint REFERENCES currency(id),
    price           decimal(6,2),
    percent         int(2) UNSIGNED
);

CREATE TABLE menu_promotion (
    menu_id         bigint NOT NULL REFERENCES menu(id),
    promotion_id    bigint NOT NULL REFERENCES promotion(id),
    CONSTRAINT menu_promotion_pkey PRIMARY KEY (menu_id, promotion_id)
);

CREATE TABLE product_promotion (
    product_id      bigint NOT NULL REFERENCES product(id),
    promotion_id    bigint NOT NULL REFERENCES promotion(id),
    CONSTRAINT product_promotion_pkey PRIMARY KEY (product_id, promotion_id)
);

CREATE TABLE user (
    id          bigint UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email       char(255) NOT NULL UNIQUE,
    password    char(128),
    firstname   varchar(255) NOT NULL,
    lastname    varchar(255) NOT NULL,
    logo        varchar(255)
);

CREATE TABLE user_address (
    id              bigint UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id         bigint NOT NULL REFERENCES user(id),
    line1           varchar(255) NOT NULL,
    line2           varchar(255),
    locality        varchar(255) NOT NULL,
    region          varchar(255) NOT NULL,
    zipcode         varchar(255) NOT NULL,
    country         varchar(255) NOT NULL,
    telephone       varchar(255) NOT NULL
);

CREATE TABLE order (
    id                      bigint UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id                 bigint NOT NULL REFERENCES user(id),
    restaurant_address_id   bigint NOT NULL REFERENCES restaurant_address(id),
    currency_id             bigint NOT NULL REFERENCES currency(id),
    price                   decimal(6,2) NOT NULL,
    type                    char(1) NOT NULL,
    time                    TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    line1                   varchar(255),
    line2                   varchar(255),
    locality                varchar(255),
    region                  varchar(255),
    zipcode                 varchar(255),
    country                 varchar(255),
    telephone               varchar(255)
);

CREATE TABLE order_menu (
    order_id        bigint NOT NULL REFERENCES order(id),
    menu_id         bigint NOT NULL REFERENCES menu(id),
    currency_id     bigint NOT NULL REFERENCES currency(id),
    price           decimal(6,2) NOT NULL,
    quantity        int NOT NULL,
    CONSTRAINT order_menu_pkey PRIMARY KEY (order_id, menu_id)
);

CREATE TABLE order_product (
    order_id        bigint NOT NULL REFERENCES order(id),
    product_id      bigint NOT NULL REFERENCES product(id),
    currency_id     bigint NOT NULL REFERENCES currency(id),
    price           decimal(6,2) NOT NULL,
    quantity        int NOT NULL,
    CONSTRAINT order_product_pkey PRIMARY KEY (order_id, product_id)
);

CREATE TABLE order_product_supplement (
    order_id        bigint NOT NULL REFERENCES order(id),
    product_id      bigint NOT NULL REFERENCES product(id),
    supplement_id      bigint NOT NULL REFERENCES supplement(id),
    currency_id     bigint NOT NULL REFERENCES currency(id),
    price           decimal(6,2) NOT NULL,
    quantity        int NOT NULL,
    CONSTRAINT order_product_pkey PRIMARY KEY (order_id, product_id, supplement_id)
);
