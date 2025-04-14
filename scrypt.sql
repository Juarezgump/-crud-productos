Create table productos (
producto_id serial primary key,
producto_nombre varchar (60) not null,
producto_precio decimal (8,2) not null,
producto_situacion char (1) DEFAULT '1'
);
