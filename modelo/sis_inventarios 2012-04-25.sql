-- SQL Manager Lite for PostgreSQL 5.1.1.1
-- ---------------------------------------
-- Host      : localhost
-- Database  : sis_inventarios
-- Version   : PostgreSQL 9.1.3, compiled by Visual C++ build 1500, 32-bit



SET search_path = public, pg_catalog;
ALTER TABLE ONLY public.compras DROP CONSTRAINT fk_compras_moneda;
ALTER TABLE ONLY public.monedas DROP CONSTRAINT monedas_pkey;
ALTER TABLE ONLY public.items DROP CONSTRAINT fk_items_item_comprado_compras;
ALTER TABLE ONLY public.factura_items DROP CONSTRAINT fk_tiene_detalle_factura;
ALTER TABLE ONLY public.ventas DROP CONSTRAINT fk_venta_venta_con_descuent;
ALTER TABLE ONLY public.ventas DROP CONSTRAINT fk_venta_venta_a_c_clientes;
ALTER TABLE ONLY public.ventas DROP CONSTRAINT fk_venta_realiza_u_empleado;
ALTER TABLE ONLY public.plan_pagos DROP CONSTRAINT fk_plan_pag_tiene_pla_creditos;
ALTER TABLE ONLY public.piezas DROP CONSTRAINT fk_piezas_tiene_pie_items;
ALTER TABLE ONLY public.nota_de_ventas DROP CONSTRAINT fk_nota_de__tiene_not_venta;
ALTER TABLE ONLY public.items DROP CONSTRAINT fk_items_tiene_mar_marcas;
ALTER TABLE ONLY public.items DROP CONSTRAINT fk_items_tiene_ind_industri;
ALTER TABLE ONLY public.items DROP CONSTRAINT fk_items_pertenece_grupos;
ALTER TABLE ONLY public.items DROP CONSTRAINT fk_items_es_almace_almacene;
ALTER TABLE ONLY public.grupos DROP CONSTRAINT fk_grupos_tiene_sub_grupos;
ALTER TABLE ONLY public.facturas DROP CONSTRAINT fk_facturas_tiene_fac_venta;
ALTER TABLE ONLY public.facturas DROP CONSTRAINT fk_facturas_tiene_dos_dosifica;
ALTER TABLE ONLY public.factura_items DROP CONSTRAINT fk_factura__esta_en_u_items;
ALTER TABLE ONLY public.detalle_nota_ventas DROP CONSTRAINT fk_detalle__tiene_det_nota_de_;
ALTER TABLE ONLY public.detalle_nota_ventas DROP CONSTRAINT fk_detalle__tiene_det_items;
ALTER TABLE ONLY public.cuotas DROP CONSTRAINT fk_cuotas_cuotas_pa_plan_pag;
ALTER TABLE ONLY public.cuentas DROP CONSTRAINT fk_cuentas_tiene_rol_roles;
ALTER TABLE ONLY public.cuentas DROP CONSTRAINT fk_cuentas_cuenta_de_empleado;
ALTER TABLE ONLY public.creditos DROP CONSTRAINT fk_creditos_venta__a__venta;
ALTER TABLE ONLY public.compras DROP CONSTRAINT fk_compras_tiene_pro_proveedo;
ALTER TABLE ONLY public.compras DROP CONSTRAINT fk_compras_registra__empleado;
ALTER TABLE ONLY public.compras DROP CONSTRAINT fk_compras_compra_a__creditos;
ALTER TABLE ONLY public.ventas DROP CONSTRAINT pk_venta;
ALTER TABLE ONLY public.roles DROP CONSTRAINT pk_roles;
ALTER TABLE ONLY public.proveedores DROP CONSTRAINT pk_proveedores;
ALTER TABLE ONLY public.plan_pagos DROP CONSTRAINT pk_plan_pagos;
ALTER TABLE ONLY public.piezas DROP CONSTRAINT pk_piezas;
ALTER TABLE ONLY public.nota_de_ventas DROP CONSTRAINT pk_nota_de_venta;
ALTER TABLE ONLY public.marcas DROP CONSTRAINT pk_marcas;
ALTER TABLE ONLY public.items DROP CONSTRAINT pk_items;
ALTER TABLE ONLY public.industrias DROP CONSTRAINT pk_industrias;
ALTER TABLE ONLY public.grupos DROP CONSTRAINT pk_grupos;
ALTER TABLE ONLY public.facturas DROP CONSTRAINT pk_facturas;
ALTER TABLE ONLY public.factura_items DROP CONSTRAINT pk_factura_items;
ALTER TABLE ONLY public.empleados DROP CONSTRAINT pk_empleados;
ALTER TABLE ONLY public.dosificaciones DROP CONSTRAINT pk_dosificaciones;
ALTER TABLE ONLY public.detalle_nota_ventas DROP CONSTRAINT pk_detalle_nota_venta;
ALTER TABLE ONLY public.descuentos DROP CONSTRAINT pk_descuentos;
ALTER TABLE ONLY public.cuotas DROP CONSTRAINT pk_cuotas;
ALTER TABLE ONLY public.cuentas DROP CONSTRAINT pk_cuentas;
ALTER TABLE ONLY public.creditos DROP CONSTRAINT pk_creditos;
ALTER TABLE ONLY public.compras DROP CONSTRAINT pk_compras;
ALTER TABLE ONLY public.clientes DROP CONSTRAINT pk_clientes;
ALTER TABLE ONLY public.almacenes DROP CONSTRAINT pk_almacenes;
DROP INDEX public.facturas_id_key;
DROP INDEX public.venta_pk;
DROP INDEX public.venta_con_descuento_fk;
DROP INDEX public.venta_a_cliente_fk;
DROP INDEX public.venta__a_credito_fk;
DROP INDEX public.tiene_subgrupos_fk;
DROP INDEX public.tiene_rol_fk;
DROP INDEX public.tiene_proveedor_fk;
DROP INDEX public.tiene_plan_de_pago_fk;
DROP INDEX public.tiene_piezas_fk;
DROP INDEX public.tiene_nota_de_venta_fk;
DROP INDEX public.tiene_marca_fk;
DROP INDEX public.tiene_industria_fk;
DROP INDEX public.tiene_factura_fk;
DROP INDEX public.tiene_dosificacion_fk;
DROP INDEX public.tiene_detalle_nota_fk;
DROP INDEX public.tiene_detalle_de_venta_fk;
DROP INDEX public.roles_pk;
DROP INDEX public.registra_una_compra_fk;
DROP INDEX public.realiza_una_venta_fk;
DROP INDEX public.proveedores_pk;
DROP INDEX public.plan_pagos_pk;
DROP INDEX public.piezas_pk;
DROP INDEX public.pertenece_a_un_grupo_fk;
DROP INDEX public.nota_de_venta_pk;
DROP INDEX public.marcas_pk;
DROP INDEX public.items_pk;
DROP INDEX public.industrias_pk;
DROP INDEX public.grupos_pk;
DROP INDEX public.facturas_pk;
DROP INDEX public.factura_items_pk;
DROP INDEX public.esta_en_una_factura_fk;
DROP INDEX public.es_almacenado_fk;
DROP INDEX public.empleados_pk;
DROP INDEX public.dosificaciones_pk;
DROP INDEX public.detalle_nota_venta_pk;
DROP INDEX public.descuentos_pk;
DROP INDEX public.cuotas_pk;
DROP INDEX public.cuotas_pagadas_fk;
DROP INDEX public.cuentas_pk;
DROP INDEX public.cuenta_de_usuario_fk;
DROP INDEX public.creditos_pk;
DROP INDEX public.compras_pk;
DROP INDEX public.compra_a_credito_fk;
DROP INDEX public.clientes_pk;
DROP INDEX public.almacenes_pk;
DROP TABLE public.monedas;
DROP TABLE public.ventas;
DROP SEQUENCE public.venta_id_seq;
DROP TABLE public.roles;
DROP SEQUENCE public.roles_id_seq;
DROP TABLE public.proveedores;
DROP SEQUENCE public.proveedores_id_seq;
DROP TABLE public.plan_pagos;
DROP SEQUENCE public.plan_pagos_id_plan_de_pago_seq;
DROP TABLE public.piezas;
DROP SEQUENCE public.piezas_id_seq;
DROP TABLE public.nota_de_ventas;
DROP TABLE public.marcas;
DROP SEQUENCE public.marcas_id_seq;
DROP TABLE public.items;
DROP SEQUENCE public.items_id_seq;
DROP TABLE public.industrias;
DROP SEQUENCE public.industrias_id_seq;
DROP TABLE public.grupos;
DROP SEQUENCE public.grupos_id_seq;
DROP TABLE public.facturas;
DROP SEQUENCE public.facturas_id_seq;
DROP TABLE public.factura_items;
DROP SEQUENCE public.factura_items_identificador_venta_seq;
DROP TABLE public.empleados;
DROP SEQUENCE public.empleados_id_seq;
DROP TABLE public.dosificaciones;
DROP SEQUENCE public.dosificaciones_id_seq;
DROP TABLE public.detalle_nota_ventas;
DROP SEQUENCE public.detalle_nota_venta_registro_seq;
DROP TABLE public.descuentos;
DROP SEQUENCE public.descuentos_id_seq;
DROP TABLE public.cuotas;
DROP SEQUENCE public.cuotas_id_seq;
DROP TABLE public.cuentas;
DROP SEQUENCE public.cuentas_id_seq;
DROP TABLE public.creditos;
DROP SEQUENCE public.creditos_id_seq;
DROP SEQUENCE public.compras_items_identificador_compra_seq;
DROP TABLE public.compras;
DROP SEQUENCE public.compras_id_seq;
DROP TABLE public.clientes;
DROP SEQUENCE public.clientes_id_seq;
DROP TABLE public.almacenes;
DROP SEQUENCE public.almacenes_id_seq;
DROP SCHEMA inventarios;
CREATE SCHEMA inventarios AUTHORIZATION postgres;
SET check_function_bodies = false;
--
-- Definition for sequence almacenes_id_seq (OID = 25336) : 
--
CREATE SEQUENCE public.almacenes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table almacenes (OID = 25338) : 
--
CREATE TABLE public.almacenes (
    id integer DEFAULT nextval('almacenes_id_seq'::regclass) NOT NULL,
    nombre_almacen varchar(50),
    descripcion_almacen varchar(255),
    direccion_almacen varchar(255)
) WITHOUT OIDS;
--
-- Definition for sequence clientes_id_seq (OID = 25345) : 
--
CREATE SEQUENCE public.clientes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table clientes (OID = 25347) : 
--
CREATE TABLE public.clientes (
    id integer DEFAULT nextval('clientes_id_seq'::regclass) NOT NULL,
    nit_ci varchar(10),
    nombres varchar(30),
    apellido_paterno varchar(50),
    apellido_materno varchar(50),
    telefono integer,
    email varchar(50)
) WITHOUT OIDS;
--
-- Definition for sequence compras_id_seq (OID = 25351) : 
--
CREATE SEQUENCE public.compras_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table compras (OID = 25353) : 
--
CREATE TABLE public.compras (
    id integer DEFAULT nextval('compras_id_seq'::regclass) NOT NULL,
    credito_id integer,
    empleado_id integer NOT NULL,
    proveedor_id integer NOT NULL,
    fecha_compra date,
    monto_total integer,
    moneda_id integer
) WITHOUT OIDS;
--
-- Definition for sequence compras_items_identificador_compra_seq (OID = 25357) : 
--
CREATE SEQUENCE public.compras_items_identificador_compra_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Definition for sequence creditos_id_seq (OID = 25363) : 
--
CREATE SEQUENCE public.creditos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table creditos (OID = 25365) : 
--
CREATE TABLE public.creditos (
    id integer DEFAULT nextval('creditos_id_seq'::regclass) NOT NULL,
    venta_id integer NOT NULL,
    cuota_inicial numeric(10,2)
) WITHOUT OIDS;
--
-- Definition for sequence cuentas_id_seq (OID = 25369) : 
--
CREATE SEQUENCE public.cuentas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table cuentas (OID = 25371) : 
--
CREATE TABLE public.cuentas (
    id integer DEFAULT nextval('cuentas_id_seq'::regclass) NOT NULL,
    empleado_id integer NOT NULL,
    rol_id integer NOT NULL,
    nombre_usuario varchar(15),
    password char(32),
    fecha_inicio_valides date,
    fecha_final_valides date
) WITHOUT OIDS;
--
-- Definition for sequence cuotas_id_seq (OID = 25375) : 
--
CREATE SEQUENCE public.cuotas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table cuotas (OID = 25377) : 
--
CREATE TABLE public.cuotas (
    id integer DEFAULT nextval('cuotas_id_seq'::regclass) NOT NULL,
    plan_pago_id integer NOT NULL,
    monto_capital numeric(4,2),
    monto_interes numeric(4,2),
    numero_cuota integer,
    fecha_pago date
) WITHOUT OIDS;
--
-- Definition for sequence descuentos_id_seq (OID = 25381) : 
--
CREATE SEQUENCE public.descuentos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table descuentos (OID = 25383) : 
--
CREATE TABLE public.descuentos (
    id integer DEFAULT nextval('descuentos_id_seq'::regclass) NOT NULL,
    nombre_descuento varchar(50),
    fecha_incicio_descuento date,
    fecha_fin_descuento date,
    cuota_inicial numeric(10,2),
    tipo varchar(10),
    descripcion_descuento varchar(255)
) WITHOUT OIDS;
--
-- Definition for sequence detalle_nota_venta_registro_seq (OID = 25387) : 
--
CREATE SEQUENCE public.detalle_nota_venta_registro_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table detalle_nota_ventas (OID = 25389) : 
--
CREATE TABLE public.detalle_nota_ventas (
    id integer DEFAULT nextval('detalle_nota_venta_registro_seq'::regclass) NOT NULL,
    item_id integer NOT NULL,
    nota_de_venta_id integer,
    cantidad integer,
    precio_venta numeric(10,2)
) WITHOUT OIDS;
--
-- Definition for sequence dosificaciones_id_seq (OID = 25393) : 
--
CREATE SEQUENCE public.dosificaciones_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table dosificaciones (OID = 25395) : 
--
CREATE TABLE public.dosificaciones (
    id integer DEFAULT nextval('dosificaciones_id_seq'::regclass) NOT NULL,
    codigo_dosificacion char(20),
    fecha_inicio_emicion date,
    fecha_limite_emision date,
    numero_de_autorizacion integer,
    numero_de_factura integer
) WITHOUT OIDS;
--
-- Definition for sequence empleados_id_seq (OID = 25399) : 
--
CREATE SEQUENCE public.empleados_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table empleados (OID = 25401) : 
--
CREATE TABLE public.empleados (
    id integer DEFAULT nextval('empleados_id_seq'::regclass) NOT NULL,
    doc_identidad varchar(20),
    nombres varchar(30),
    apellido_paterno varchar(50),
    apellido_materno varchar(50),
    fecha_ingreso date,
    contacto varchar(255),
    telefono integer,
    email varchar(50),
    tipo_doc_identidad char(20)
) WITHOUT OIDS;
--
-- Definition for sequence factura_items_identificador_venta_seq (OID = 25405) : 
--
CREATE SEQUENCE public.factura_items_identificador_venta_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table factura_items (OID = 25407) : 
--
CREATE TABLE public.factura_items (
    id integer DEFAULT nextval('factura_items_identificador_venta_seq'::regclass) NOT NULL,
    item_id integer NOT NULL,
    factura_id integer NOT NULL,
    cantidad integer,
    precio_venta numeric(10,2)
) WITHOUT OIDS;
--
-- Definition for sequence facturas_id_seq (OID = 25411) : 
--
CREATE SEQUENCE public.facturas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table facturas (OID = 25413) : 
--
CREATE TABLE public.facturas (
    dosificacion_id integer NOT NULL,
    id integer DEFAULT nextval('facturas_id_seq'::regclass) NOT NULL,
    venta_id integer NOT NULL,
    fecha_factura date,
    monto_total integer,
    numero_factura integer
) WITHOUT OIDS;
--
-- Definition for sequence grupos_id_seq (OID = 25417) : 
--
CREATE SEQUENCE public.grupos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table grupos (OID = 25419) : 
--
CREATE TABLE public.grupos (
    id integer DEFAULT nextval('grupos_id_seq'::regclass) NOT NULL,
    grupo_id integer,
    nombre_grupo varchar(50),
    descripcion_grupo varchar(255),
    codigo varchar(5)
) WITHOUT OIDS;
--
-- Definition for sequence industrias_id_seq (OID = 25423) : 
--
CREATE SEQUENCE public.industrias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table industrias (OID = 25425) : 
--
CREATE TABLE public.industrias (
    id integer DEFAULT nextval('industrias_id_seq'::regclass) NOT NULL,
    nombre_industria varchar(100),
    descripcion_industria varchar(255)
) WITHOUT OIDS;
--
-- Definition for sequence items_id_seq (OID = 25429) : 
--
CREATE SEQUENCE public.items_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table items (OID = 25431) : 
--
CREATE TABLE public.items (
    id integer DEFAULT nextval('items_id_seq'::regclass) NOT NULL,
    marca_id integer NOT NULL,
    grupo_id integer NOT NULL,
    industria_id integer NOT NULL,
    almacen_id integer NOT NULL,
    nombre_articulo varchar(100),
    descripcion varchar(255),
    numero_de_serie varchar(100),
    codigo varchar(10),
    precio_compra numeric(10,2),
    precio_referencia_venta numeric(10,2),
    garantia_compra integer,
    compra_id integer NOT NULL
) WITHOUT OIDS;
--
-- Definition for sequence marcas_id_seq (OID = 25435) : 
--
CREATE SEQUENCE public.marcas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table marcas (OID = 25437) : 
--
CREATE TABLE public.marcas (
    id integer DEFAULT nextval('marcas_id_seq'::regclass) NOT NULL,
    nombre_marca varchar(50),
    descripcion_marca varchar(255)
) WITHOUT OIDS;
--
-- Structure for table nota_de_ventas (OID = 25441) : 
--
CREATE TABLE public.nota_de_ventas (
    id integer NOT NULL,
    venta_id integer NOT NULL,
    fecha_nota_venta date,
    monto_total integer
) WITHOUT OIDS;
--
-- Definition for sequence piezas_id_seq (OID = 25444) : 
--
CREATE SEQUENCE public.piezas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table piezas (OID = 25446) : 
--
CREATE TABLE public.piezas (
    id integer DEFAULT nextval('piezas_id_seq'::regclass) NOT NULL,
    item_id integer NOT NULL,
    nombre_pieza varchar(50),
    numero_de_serie varchar(100),
    descripcion_pieza varchar(255)
) WITHOUT OIDS;
--
-- Definition for sequence plan_pagos_id_plan_de_pago_seq (OID = 25450) : 
--
CREATE SEQUENCE public.plan_pagos_id_plan_de_pago_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table plan_pagos (OID = 25452) : 
--
CREATE TABLE public.plan_pagos (
    id integer DEFAULT nextval('plan_pagos_id_plan_de_pago_seq'::regclass) NOT NULL,
    credito_id integer NOT NULL,
    fecha_inicio_pagos date,
    numero_de_cuotas integer,
    tipo varchar(10),
    interes numeric(4,2),
    numero_de_dias integer,
    tolerancia integer
) WITHOUT OIDS;
--
-- Definition for sequence proveedores_id_seq (OID = 25456) : 
--
CREATE SEQUENCE public.proveedores_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table proveedores (OID = 25458) : 
--
CREATE TABLE public.proveedores (
    id integer DEFAULT nextval('proveedores_id_seq'::regclass) NOT NULL,
    nombre_proveedor varchar(100),
    direccion_proveedor varchar(255),
    telefono integer,
    contacto varchar(255),
    email varchar(50),
    email_contacto varchar(100),
    telefono_contacto integer
) WITHOUT OIDS;
--
-- Definition for sequence roles_id_seq (OID = 25465) : 
--
CREATE SEQUENCE public.roles_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table roles (OID = 25467) : 
--
CREATE TABLE public.roles (
    id integer DEFAULT nextval('roles_id_seq'::regclass) NOT NULL,
    nombre_rol varchar(20),
    descripcion varchar(255)
) WITHOUT OIDS;
--
-- Definition for sequence venta_id_seq (OID = 25471) : 
--
CREATE SEQUENCE public.venta_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table ventas (OID = 25473) : 
--
CREATE TABLE public.ventas (
    id integer DEFAULT nextval('venta_id_seq'::regclass) NOT NULL,
    cliente_id integer NOT NULL,
    descuento_id integer,
    empleado_id integer NOT NULL,
    fecha_venta date,
    pagado boolean
) WITHOUT OIDS;
--
-- Structure for table monedas (OID = 25715) : 
--
CREATE TABLE public.monedas (
    id serial NOT NULL,
    nombre_moneda varchar(10),
    simbolo_moneda varchar(3)
) WITHOUT OIDS;
--
-- Data for table public.almacenes (OID = 25338) (LIMIT 0,2)
--
INSERT INTO almacenes (id, nombre_almacen, descripcion_almacen, direccion_almacen)
VALUES (1, 'alamacen uno', 'u200basdjhjdas', 'asjhdj');

INSERT INTO almacenes (id, nombre_almacen, descripcion_almacen, direccion_almacen)
VALUES (3, 'Almacen jose', 'u200bhagshhjhjg <br>', 'jhjdshfkjhkjh');

--
-- Data for table public.clientes (OID = 25347) (LIMIT 0,3)
--
INSERT INTO clientes (id, nit_ci, nombres, apellido_paterno, apellido_materno, telefono, email)
VALUES (1, '4324', 'gfgfdg', 'gdgfdg', 'gfdgfd', 543543, 'gfdgfd@fdfds.ff');

INSERT INTO clientes (id, nit_ci, nombres, apellido_paterno, apellido_materno, telefono, email)
VALUES (2, '456456', 'jhjhjh', 'jonaz', 'tejada', 78978, 'kjk@g.com');

INSERT INTO clientes (id, nit_ci, nombres, apellido_paterno, apellido_materno, telefono, email)
VALUES (3, '532532', 'gdgfdg', 'gfdgfdgfd', 'gfdgfd', 665465, 'gfdgf@dsds.cc');

--
-- Data for table public.compras (OID = 25353) (LIMIT 0,4)
--
INSERT INTO compras (id, credito_id, empleado_id, proveedor_id, fecha_compra, monto_total, moneda_id)
VALUES (1, NULL, 1, 2, '2012-04-20', 1000, 1);

INSERT INTO compras (id, credito_id, empleado_id, proveedor_id, fecha_compra, monto_total, moneda_id)
VALUES (3, NULL, 1, 7, '2012-04-19', 20000, 1);

INSERT INTO compras (id, credito_id, empleado_id, proveedor_id, fecha_compra, monto_total, moneda_id)
VALUES (7, NULL, 1, 2, '2013-09-04', 45645465, 2);

INSERT INTO compras (id, credito_id, empleado_id, proveedor_id, fecha_compra, monto_total, moneda_id)
VALUES (8, NULL, 1, 2, '2013-09-04', 5645465, 2);

--
-- Data for table public.empleados (OID = 25401) (LIMIT 0,1)
--
INSERT INTO empleados (id, doc_identidad, nombres, apellido_paterno, apellido_materno, fecha_ingreso, contacto, telefono, email, tipo_doc_identidad)
VALUES (1, '546545', 'jose', 'peres', 'peredo', NULL, 'asd', 45789, 'lkjskl@g.com', 'Carnet');

--
-- Data for table public.grupos (OID = 25419) (LIMIT 0,5)
--
INSERT INTO grupos (id, grupo_id, nombre_grupo, descripcion_grupo, codigo)
VALUES (1, NULL, 'Articulo para venta', '', NULL);

INSERT INTO grupos (id, grupo_id, nombre_grupo, descripcion_grupo, codigo)
VALUES (5, 1, 'Equipos de Sonido', 'Todo tipo de equipos de sonido como ser radios, componentes, etc', NULL);

INSERT INTO grupos (id, grupo_id, nombre_grupo, descripcion_grupo, codigo)
VALUES (7, 1, 'ghfhgf', 'u200bhgfdhgfh', '4444');

INSERT INTO grupos (id, grupo_id, nombre_grupo, descripcion_grupo, codigo)
VALUES (8, 1, 'gfdgfd', 'u200bgfdgfd', 'dgfdg');

INSERT INTO grupos (id, grupo_id, nombre_grupo, descripcion_grupo, codigo)
VALUES (10, 5, 'grupo 1', 'u200basjhdjsh', '123a');

--
-- Data for table public.industrias (OID = 25425) (LIMIT 0,1)
--
INSERT INTO industrias (id, nombre_industria, descripcion_industria)
VALUES (1, 'Industria boliviana', 'industria boliviana jajajau200b');

--
-- Data for table public.items (OID = 25431) (LIMIT 0,2)
--
INSERT INTO items (id, marca_id, grupo_id, industria_id, almacen_id, nombre_articulo, descripcion, numero_de_serie, codigo, precio_compra, precio_referencia_venta, garantia_compra, compra_id)
VALUES (1, 1, 1, 1, 1, 'TV Plasma', 'Televisor Plasma', '123456ABC', 'TVP-01', 200.00, 250.00, 2, 1);

INSERT INTO items (id, marca_id, grupo_id, industria_id, almacen_id, nombre_articulo, descripcion, numero_de_serie, codigo, precio_compra, precio_referencia_venta, garantia_compra, compra_id)
VALUES (2, 1, 1, 1, 1, 'TV LCD', 'Televisor lcd', '12356cld', 'TV-LCD', 450.00, 500.00, 2, 8);

--
-- Data for table public.marcas (OID = 25437) (LIMIT 0,2)
--
INSERT INTO marcas (id, nombre_marca, descripcion_marca)
VALUES (1, 'Marca marca', 'u200basdf');

INSERT INTO marcas (id, nombre_marca, descripcion_marca)
VALUES (2, 'Marca boliviana', 'u200buna marca boliviana');

--
-- Data for table public.proveedores (OID = 25458) (LIMIT 0,2)
--
INSERT INTO proveedores (id, nombre_proveedor, direccion_proveedor, telefono, contacto, email, email_contacto, telefono_contacto)
VALUES (2, 'Joaquin Gonzales', 'La Paz', 5435, 'gfdgfds', 'gfhg@fdsfds.vv', 'gfdsgfd@dsfdsf.ff', 455775);

INSERT INTO proveedores (id, nombre_proveedor, direccion_proveedor, telefono, contacto, email, email_contacto, telefono_contacto)
VALUES (7, 'Pepito Peres', 'jagshd', 7078897, 'jhjh', 'jhsjhd@g.co', 'jshjdf4f@f.ff', 1223456);

--
-- Data for table public.roles (OID = 25467) (LIMIT 0,2)
--
INSERT INTO roles (id, nombre_rol, descripcion)
VALUES (1, 'Administrador', 'Cuenta con todos los privilegios');

INSERT INTO roles (id, nombre_rol, descripcion)
VALUES (2, 'Vendedor', 'Empleado que realiza ventas');

--
-- Data for table public.monedas (OID = 25715) (LIMIT 0,2)
--
INSERT INTO monedas (id, nombre_moneda, simbolo_moneda)
VALUES (1, 'Bolivianos', 'Bs');

INSERT INTO monedas (id, nombre_moneda, simbolo_moneda)
VALUES (2, 'Dolares', '$us');

--
-- Definition for index almacenes_pk (OID = 25477) : 
--
CREATE UNIQUE INDEX almacenes_pk ON almacenes USING btree (id);
--
-- Definition for index clientes_pk (OID = 25479) : 
--
CREATE UNIQUE INDEX clientes_pk ON clientes USING btree (id);
--
-- Definition for index compra_a_credito_fk (OID = 25480) : 
--
CREATE INDEX compra_a_credito_fk ON compras USING btree (credito_id);
--
-- Definition for index compras_pk (OID = 25482) : 
--
CREATE UNIQUE INDEX compras_pk ON compras USING btree (id);
--
-- Definition for index creditos_pk (OID = 25483) : 
--
CREATE UNIQUE INDEX creditos_pk ON creditos USING btree (id);
--
-- Definition for index cuenta_de_usuario_fk (OID = 25484) : 
--
CREATE INDEX cuenta_de_usuario_fk ON cuentas USING btree (empleado_id);
--
-- Definition for index cuentas_pk (OID = 25485) : 
--
CREATE UNIQUE INDEX cuentas_pk ON cuentas USING btree (id);
--
-- Definition for index cuotas_pagadas_fk (OID = 25486) : 
--
CREATE INDEX cuotas_pagadas_fk ON cuotas USING btree (plan_pago_id);
--
-- Definition for index cuotas_pk (OID = 25487) : 
--
CREATE UNIQUE INDEX cuotas_pk ON cuotas USING btree (id);
--
-- Definition for index descuentos_pk (OID = 25488) : 
--
CREATE UNIQUE INDEX descuentos_pk ON descuentos USING btree (id);
--
-- Definition for index detalle_nota_venta_pk (OID = 25489) : 
--
CREATE UNIQUE INDEX detalle_nota_venta_pk ON detalle_nota_ventas USING btree (id);
--
-- Definition for index dosificaciones_pk (OID = 25490) : 
--
CREATE UNIQUE INDEX dosificaciones_pk ON dosificaciones USING btree (id);
--
-- Definition for index empleados_pk (OID = 25491) : 
--
CREATE UNIQUE INDEX empleados_pk ON empleados USING btree (id);
--
-- Definition for index es_almacenado_fk (OID = 25492) : 
--
CREATE INDEX es_almacenado_fk ON items USING btree (almacen_id);
--
-- Definition for index esta_en_una_factura_fk (OID = 25494) : 
--
CREATE INDEX esta_en_una_factura_fk ON factura_items USING btree (item_id);
--
-- Definition for index factura_items_pk (OID = 25495) : 
--
CREATE UNIQUE INDEX factura_items_pk ON factura_items USING btree (id);
--
-- Definition for index facturas_pk (OID = 25496) : 
--
CREATE UNIQUE INDEX facturas_pk ON facturas USING btree (dosificacion_id, id);
--
-- Definition for index grupos_pk (OID = 25497) : 
--
CREATE UNIQUE INDEX grupos_pk ON grupos USING btree (id);
--
-- Definition for index industrias_pk (OID = 25498) : 
--
CREATE UNIQUE INDEX industrias_pk ON industrias USING btree (id);
--
-- Definition for index items_pk (OID = 25499) : 
--
CREATE UNIQUE INDEX items_pk ON items USING btree (id);
--
-- Definition for index marcas_pk (OID = 25500) : 
--
CREATE UNIQUE INDEX marcas_pk ON marcas USING btree (id);
--
-- Definition for index nota_de_venta_pk (OID = 25501) : 
--
CREATE UNIQUE INDEX nota_de_venta_pk ON nota_de_ventas USING btree (id);
--
-- Definition for index pertenece_a_un_grupo_fk (OID = 25502) : 
--
CREATE INDEX pertenece_a_un_grupo_fk ON items USING btree (grupo_id);
--
-- Definition for index piezas_pk (OID = 25503) : 
--
CREATE UNIQUE INDEX piezas_pk ON piezas USING btree (id);
--
-- Definition for index plan_pagos_pk (OID = 25504) : 
--
CREATE UNIQUE INDEX plan_pagos_pk ON plan_pagos USING btree (id);
--
-- Definition for index proveedores_pk (OID = 25505) : 
--
CREATE UNIQUE INDEX proveedores_pk ON proveedores USING btree (id);
--
-- Definition for index realiza_una_venta_fk (OID = 25506) : 
--
CREATE INDEX realiza_una_venta_fk ON ventas USING btree (empleado_id);
--
-- Definition for index registra_una_compra_fk (OID = 25507) : 
--
CREATE INDEX registra_una_compra_fk ON compras USING btree (empleado_id);
--
-- Definition for index roles_pk (OID = 25508) : 
--
CREATE UNIQUE INDEX roles_pk ON roles USING btree (id);
--
-- Definition for index tiene_detalle_de_venta_fk (OID = 25509) : 
--
CREATE INDEX tiene_detalle_de_venta_fk ON detalle_nota_ventas USING btree (nota_de_venta_id);
--
-- Definition for index tiene_detalle_nota_fk (OID = 25510) : 
--
CREATE INDEX tiene_detalle_nota_fk ON detalle_nota_ventas USING btree (item_id);
--
-- Definition for index tiene_dosificacion_fk (OID = 25511) : 
--
CREATE INDEX tiene_dosificacion_fk ON facturas USING btree (dosificacion_id);
--
-- Definition for index tiene_factura_fk (OID = 25512) : 
--
CREATE INDEX tiene_factura_fk ON facturas USING btree (venta_id);
--
-- Definition for index tiene_industria_fk (OID = 25513) : 
--
CREATE INDEX tiene_industria_fk ON items USING btree (industria_id);
--
-- Definition for index tiene_marca_fk (OID = 25514) : 
--
CREATE INDEX tiene_marca_fk ON items USING btree (marca_id);
--
-- Definition for index tiene_nota_de_venta_fk (OID = 25515) : 
--
CREATE INDEX tiene_nota_de_venta_fk ON nota_de_ventas USING btree (venta_id);
--
-- Definition for index tiene_piezas_fk (OID = 25516) : 
--
CREATE INDEX tiene_piezas_fk ON piezas USING btree (item_id);
--
-- Definition for index tiene_plan_de_pago_fk (OID = 25517) : 
--
CREATE INDEX tiene_plan_de_pago_fk ON plan_pagos USING btree (credito_id);
--
-- Definition for index tiene_proveedor_fk (OID = 25518) : 
--
CREATE INDEX tiene_proveedor_fk ON compras USING btree (proveedor_id);
--
-- Definition for index tiene_rol_fk (OID = 25519) : 
--
CREATE INDEX tiene_rol_fk ON cuentas USING btree (rol_id);
--
-- Definition for index tiene_subgrupos_fk (OID = 25520) : 
--
CREATE INDEX tiene_subgrupos_fk ON grupos USING btree (grupo_id);
--
-- Definition for index venta__a_credito_fk (OID = 25521) : 
--
CREATE INDEX venta__a_credito_fk ON creditos USING btree (venta_id);
--
-- Definition for index venta_a_cliente_fk (OID = 25522) : 
--
CREATE INDEX venta_a_cliente_fk ON ventas USING btree (cliente_id);
--
-- Definition for index venta_con_descuento_fk (OID = 25523) : 
--
CREATE INDEX venta_con_descuento_fk ON ventas USING btree (descuento_id);
--
-- Definition for index venta_pk (OID = 25524) : 
--
CREATE UNIQUE INDEX venta_pk ON ventas USING btree (id);
--
-- Definition for index facturas_id_key (OID = 25525) : 
--
CREATE UNIQUE INDEX facturas_id_key ON facturas USING btree (id);
--
-- Definition for index pk_almacenes (OID = 25526) : 
--
ALTER TABLE ONLY almacenes
    ADD CONSTRAINT pk_almacenes
    PRIMARY KEY (id);
--
-- Definition for index pk_clientes (OID = 25528) : 
--
ALTER TABLE ONLY clientes
    ADD CONSTRAINT pk_clientes
    PRIMARY KEY (id);
--
-- Definition for index pk_compras (OID = 25530) : 
--
ALTER TABLE ONLY compras
    ADD CONSTRAINT pk_compras
    PRIMARY KEY (id);
--
-- Definition for index pk_creditos (OID = 25534) : 
--
ALTER TABLE ONLY creditos
    ADD CONSTRAINT pk_creditos
    PRIMARY KEY (id);
--
-- Definition for index pk_cuentas (OID = 25536) : 
--
ALTER TABLE ONLY cuentas
    ADD CONSTRAINT pk_cuentas
    PRIMARY KEY (id);
--
-- Definition for index pk_cuotas (OID = 25538) : 
--
ALTER TABLE ONLY cuotas
    ADD CONSTRAINT pk_cuotas
    PRIMARY KEY (id);
--
-- Definition for index pk_descuentos (OID = 25540) : 
--
ALTER TABLE ONLY descuentos
    ADD CONSTRAINT pk_descuentos
    PRIMARY KEY (id);
--
-- Definition for index pk_detalle_nota_venta (OID = 25542) : 
--
ALTER TABLE ONLY detalle_nota_ventas
    ADD CONSTRAINT pk_detalle_nota_venta
    PRIMARY KEY (id);
--
-- Definition for index pk_dosificaciones (OID = 25544) : 
--
ALTER TABLE ONLY dosificaciones
    ADD CONSTRAINT pk_dosificaciones
    PRIMARY KEY (id);
--
-- Definition for index pk_empleados (OID = 25546) : 
--
ALTER TABLE ONLY empleados
    ADD CONSTRAINT pk_empleados
    PRIMARY KEY (id);
--
-- Definition for index pk_factura_items (OID = 25548) : 
--
ALTER TABLE ONLY factura_items
    ADD CONSTRAINT pk_factura_items
    PRIMARY KEY (id);
--
-- Definition for index pk_facturas (OID = 25550) : 
--
ALTER TABLE ONLY facturas
    ADD CONSTRAINT pk_facturas
    PRIMARY KEY (dosificacion_id, id);
--
-- Definition for index pk_grupos (OID = 25552) : 
--
ALTER TABLE ONLY grupos
    ADD CONSTRAINT pk_grupos
    PRIMARY KEY (id);
--
-- Definition for index pk_industrias (OID = 25554) : 
--
ALTER TABLE ONLY industrias
    ADD CONSTRAINT pk_industrias
    PRIMARY KEY (id);
--
-- Definition for index pk_items (OID = 25556) : 
--
ALTER TABLE ONLY items
    ADD CONSTRAINT pk_items
    PRIMARY KEY (id);
--
-- Definition for index pk_marcas (OID = 25558) : 
--
ALTER TABLE ONLY marcas
    ADD CONSTRAINT pk_marcas
    PRIMARY KEY (id);
--
-- Definition for index pk_nota_de_venta (OID = 25560) : 
--
ALTER TABLE ONLY nota_de_ventas
    ADD CONSTRAINT pk_nota_de_venta
    PRIMARY KEY (id);
--
-- Definition for index pk_piezas (OID = 25562) : 
--
ALTER TABLE ONLY piezas
    ADD CONSTRAINT pk_piezas
    PRIMARY KEY (id);
--
-- Definition for index pk_plan_pagos (OID = 25564) : 
--
ALTER TABLE ONLY plan_pagos
    ADD CONSTRAINT pk_plan_pagos
    PRIMARY KEY (id);
--
-- Definition for index pk_proveedores (OID = 25566) : 
--
ALTER TABLE ONLY proveedores
    ADD CONSTRAINT pk_proveedores
    PRIMARY KEY (id);
--
-- Definition for index pk_roles (OID = 25568) : 
--
ALTER TABLE ONLY roles
    ADD CONSTRAINT pk_roles
    PRIMARY KEY (id);
--
-- Definition for index pk_venta (OID = 25570) : 
--
ALTER TABLE ONLY ventas
    ADD CONSTRAINT pk_venta
    PRIMARY KEY (id);
--
-- Definition for index fk_compras_compra_a__creditos (OID = 25582) : 
--
ALTER TABLE ONLY compras
    ADD CONSTRAINT fk_compras_compra_a__creditos
    FOREIGN KEY (credito_id) REFERENCES creditos(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_compras_registra__empleado (OID = 25587) : 
--
ALTER TABLE ONLY compras
    ADD CONSTRAINT fk_compras_registra__empleado
    FOREIGN KEY (empleado_id) REFERENCES empleados(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_compras_tiene_pro_proveedo (OID = 25592) : 
--
ALTER TABLE ONLY compras
    ADD CONSTRAINT fk_compras_tiene_pro_proveedo
    FOREIGN KEY (proveedor_id) REFERENCES proveedores(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_creditos_venta__a__venta (OID = 25597) : 
--
ALTER TABLE ONLY creditos
    ADD CONSTRAINT fk_creditos_venta__a__venta
    FOREIGN KEY (venta_id) REFERENCES ventas(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_cuentas_cuenta_de_empleado (OID = 25602) : 
--
ALTER TABLE ONLY cuentas
    ADD CONSTRAINT fk_cuentas_cuenta_de_empleado
    FOREIGN KEY (empleado_id) REFERENCES empleados(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_cuentas_tiene_rol_roles (OID = 25607) : 
--
ALTER TABLE ONLY cuentas
    ADD CONSTRAINT fk_cuentas_tiene_rol_roles
    FOREIGN KEY (rol_id) REFERENCES roles(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_cuotas_cuotas_pa_plan_pag (OID = 25612) : 
--
ALTER TABLE ONLY cuotas
    ADD CONSTRAINT fk_cuotas_cuotas_pa_plan_pag
    FOREIGN KEY (plan_pago_id) REFERENCES plan_pagos(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_detalle__tiene_det_items (OID = 25617) : 
--
ALTER TABLE ONLY detalle_nota_ventas
    ADD CONSTRAINT fk_detalle__tiene_det_items
    FOREIGN KEY (item_id) REFERENCES items(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_detalle__tiene_det_nota_de_ (OID = 25622) : 
--
ALTER TABLE ONLY detalle_nota_ventas
    ADD CONSTRAINT fk_detalle__tiene_det_nota_de_
    FOREIGN KEY (nota_de_venta_id) REFERENCES nota_de_ventas(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_factura__esta_en_u_items (OID = 25627) : 
--
ALTER TABLE ONLY factura_items
    ADD CONSTRAINT fk_factura__esta_en_u_items
    FOREIGN KEY (item_id) REFERENCES items(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_facturas_tiene_dos_dosifica (OID = 25632) : 
--
ALTER TABLE ONLY facturas
    ADD CONSTRAINT fk_facturas_tiene_dos_dosifica
    FOREIGN KEY (dosificacion_id) REFERENCES dosificaciones(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_facturas_tiene_fac_venta (OID = 25637) : 
--
ALTER TABLE ONLY facturas
    ADD CONSTRAINT fk_facturas_tiene_fac_venta
    FOREIGN KEY (venta_id) REFERENCES ventas(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_grupos_tiene_sub_grupos (OID = 25642) : 
--
ALTER TABLE ONLY grupos
    ADD CONSTRAINT fk_grupos_tiene_sub_grupos
    FOREIGN KEY (grupo_id) REFERENCES grupos(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_items_es_almace_almacene (OID = 25647) : 
--
ALTER TABLE ONLY items
    ADD CONSTRAINT fk_items_es_almace_almacene
    FOREIGN KEY (almacen_id) REFERENCES almacenes(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_items_pertenece_grupos (OID = 25652) : 
--
ALTER TABLE ONLY items
    ADD CONSTRAINT fk_items_pertenece_grupos
    FOREIGN KEY (grupo_id) REFERENCES grupos(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_items_tiene_ind_industri (OID = 25657) : 
--
ALTER TABLE ONLY items
    ADD CONSTRAINT fk_items_tiene_ind_industri
    FOREIGN KEY (industria_id) REFERENCES industrias(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_items_tiene_mar_marcas (OID = 25662) : 
--
ALTER TABLE ONLY items
    ADD CONSTRAINT fk_items_tiene_mar_marcas
    FOREIGN KEY (marca_id) REFERENCES marcas(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_nota_de__tiene_not_venta (OID = 25667) : 
--
ALTER TABLE ONLY nota_de_ventas
    ADD CONSTRAINT fk_nota_de__tiene_not_venta
    FOREIGN KEY (venta_id) REFERENCES ventas(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_piezas_tiene_pie_items (OID = 25672) : 
--
ALTER TABLE ONLY piezas
    ADD CONSTRAINT fk_piezas_tiene_pie_items
    FOREIGN KEY (item_id) REFERENCES items(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_plan_pag_tiene_pla_creditos (OID = 25677) : 
--
ALTER TABLE ONLY plan_pagos
    ADD CONSTRAINT fk_plan_pag_tiene_pla_creditos
    FOREIGN KEY (credito_id) REFERENCES creditos(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_venta_realiza_u_empleado (OID = 25682) : 
--
ALTER TABLE ONLY ventas
    ADD CONSTRAINT fk_venta_realiza_u_empleado
    FOREIGN KEY (empleado_id) REFERENCES empleados(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_venta_venta_a_c_clientes (OID = 25687) : 
--
ALTER TABLE ONLY ventas
    ADD CONSTRAINT fk_venta_venta_a_c_clientes
    FOREIGN KEY (cliente_id) REFERENCES clientes(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_venta_venta_con_descuent (OID = 25692) : 
--
ALTER TABLE ONLY ventas
    ADD CONSTRAINT fk_venta_venta_con_descuent
    FOREIGN KEY (descuento_id) REFERENCES descuentos(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_tiene_detalle_factura (OID = 25697) : 
--
ALTER TABLE ONLY factura_items
    ADD CONSTRAINT fk_tiene_detalle_factura
    FOREIGN KEY (factura_id) REFERENCES facturas(id);
--
-- Definition for index fk_items_item_comprado_compras (OID = 25708) : 
--
ALTER TABLE ONLY items
    ADD CONSTRAINT fk_items_item_comprado_compras
    FOREIGN KEY (compra_id) REFERENCES compras(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index monedas_pkey (OID = 25719) : 
--
ALTER TABLE ONLY monedas
    ADD CONSTRAINT monedas_pkey
    PRIMARY KEY (id);
--
-- Definition for index fk_compras_moneda (OID = 25721) : 
--
ALTER TABLE ONLY compras
    ADD CONSTRAINT fk_compras_moneda
    FOREIGN KEY (moneda_id) REFERENCES monedas(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Data for sequence public.almacenes_id_seq (OID = 25336)
--
SELECT pg_catalog.setval('almacenes_id_seq', 3, true);
--
-- Data for sequence public.clientes_id_seq (OID = 25345)
--
SELECT pg_catalog.setval('clientes_id_seq', 3, true);
--
-- Data for sequence public.compras_id_seq (OID = 25351)
--
SELECT pg_catalog.setval('compras_id_seq', 8, true);
--
-- Data for sequence public.compras_items_identificador_compra_seq (OID = 25357)
--
SELECT pg_catalog.setval('compras_items_identificador_compra_seq', 1, false);
--
-- Data for sequence public.creditos_id_seq (OID = 25363)
--
SELECT pg_catalog.setval('creditos_id_seq', 1, false);
--
-- Data for sequence public.cuentas_id_seq (OID = 25369)
--
SELECT pg_catalog.setval('cuentas_id_seq', 1, false);
--
-- Data for sequence public.cuotas_id_seq (OID = 25375)
--
SELECT pg_catalog.setval('cuotas_id_seq', 1, false);
--
-- Data for sequence public.descuentos_id_seq (OID = 25381)
--
SELECT pg_catalog.setval('descuentos_id_seq', 1, false);
--
-- Data for sequence public.detalle_nota_venta_registro_seq (OID = 25387)
--
SELECT pg_catalog.setval('detalle_nota_venta_registro_seq', 1, false);
--
-- Data for sequence public.dosificaciones_id_seq (OID = 25393)
--
SELECT pg_catalog.setval('dosificaciones_id_seq', 1, false);
--
-- Data for sequence public.empleados_id_seq (OID = 25399)
--
SELECT pg_catalog.setval('empleados_id_seq', 1, true);
--
-- Data for sequence public.factura_items_identificador_venta_seq (OID = 25405)
--
SELECT pg_catalog.setval('factura_items_identificador_venta_seq', 1, false);
--
-- Data for sequence public.facturas_id_seq (OID = 25411)
--
SELECT pg_catalog.setval('facturas_id_seq', 1, false);
--
-- Data for sequence public.grupos_id_seq (OID = 25417)
--
SELECT pg_catalog.setval('grupos_id_seq', 10, true);
--
-- Data for sequence public.industrias_id_seq (OID = 25423)
--
SELECT pg_catalog.setval('industrias_id_seq', 1, true);
--
-- Data for sequence public.items_id_seq (OID = 25429)
--
SELECT pg_catalog.setval('items_id_seq', 2, true);
--
-- Data for sequence public.marcas_id_seq (OID = 25435)
--
SELECT pg_catalog.setval('marcas_id_seq', 2, true);
--
-- Data for sequence public.piezas_id_seq (OID = 25444)
--
SELECT pg_catalog.setval('piezas_id_seq', 1, false);
--
-- Data for sequence public.plan_pagos_id_plan_de_pago_seq (OID = 25450)
--
SELECT pg_catalog.setval('plan_pagos_id_plan_de_pago_seq', 1, false);
--
-- Data for sequence public.proveedores_id_seq (OID = 25456)
--
SELECT pg_catalog.setval('proveedores_id_seq', 7, true);
--
-- Data for sequence public.roles_id_seq (OID = 25465)
--
SELECT pg_catalog.setval('roles_id_seq', 2, true);
--
-- Data for sequence public.venta_id_seq (OID = 25471)
--
SELECT pg_catalog.setval('venta_id_seq', 1, false);
--
-- Data for sequence public.monedas_id_seq (OID = 25713)
--
SELECT pg_catalog.setval('monedas_id_seq', 2, true);
--
-- Comments
--
COMMENT ON SCHEMA public IS 'standard public schema';
COMMENT ON COLUMN public.items.id IS 'nextval(''items_id_seq''::regclass)';
