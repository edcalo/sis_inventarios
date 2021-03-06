-- SQL Manager Lite for PostgreSQL 5.1.1.1
-- ---------------------------------------
-- Host      : localhost
-- Database  : sis_inventarios
-- Version   : PostgreSQL 9.1.3, compiled by Visual C++ build 1500, 32-bit



SET search_path = public, pg_catalog;
DROP INDEX IF EXISTS public.facturas_id_key;
DROP INDEX IF EXISTS public.venta_pk;
DROP INDEX IF EXISTS public.venta_con_descuento_fk;
DROP INDEX IF EXISTS public.venta_a_cliente_fk;
DROP INDEX IF EXISTS public.venta__a_credito_fk;
DROP INDEX IF EXISTS public.tiene_subgrupos_fk;
DROP INDEX IF EXISTS public.tiene_rol_fk;
DROP INDEX IF EXISTS public.tiene_proveedor_fk;
DROP INDEX IF EXISTS public.tiene_plan_de_pago_fk;
DROP INDEX IF EXISTS public.tiene_piezas_fk;
DROP INDEX IF EXISTS public.tiene_nota_de_venta_fk;
DROP INDEX IF EXISTS public.tiene_marca_fk;
DROP INDEX IF EXISTS public.tiene_industria_fk;
DROP INDEX IF EXISTS public.tiene_factura_fk;
DROP INDEX IF EXISTS public.tiene_dosificacion_fk;
DROP INDEX IF EXISTS public.tiene_detalle_nota_fk;
DROP INDEX IF EXISTS public.tiene_detalle_de_venta_fk;
DROP INDEX IF EXISTS public.roles_pk;
DROP INDEX IF EXISTS public.registra_una_compra_fk;
DROP INDEX IF EXISTS public.realiza_una_venta_fk;
DROP INDEX IF EXISTS public.proveedores_pk;
DROP INDEX IF EXISTS public.plan_pagos_pk;
DROP INDEX IF EXISTS public.piezas_pk;
DROP INDEX IF EXISTS public.pertenece_a_un_grupo_fk;
DROP INDEX IF EXISTS public.nota_de_venta_pk;
DROP INDEX IF EXISTS public.marcas_pk;
DROP INDEX IF EXISTS public.items_pk;
DROP INDEX IF EXISTS public.industrias_pk;
DROP INDEX IF EXISTS public.grupos_pk;
DROP INDEX IF EXISTS public.facturas_pk;
DROP INDEX IF EXISTS public.factura_items_pk;
DROP INDEX IF EXISTS public.esta_en_una_factura_fk;
DROP INDEX IF EXISTS public.es_detallado_fk;
DROP INDEX IF EXISTS public.es_almacenado_fk;
DROP INDEX IF EXISTS public.empleados_pk;
DROP INDEX IF EXISTS public.dosificaciones_pk;
DROP INDEX IF EXISTS public.detalle_nota_venta_pk;
DROP INDEX IF EXISTS public.descuentos_pk;
DROP INDEX IF EXISTS public.cuotas_pk;
DROP INDEX IF EXISTS public.cuotas_pagadas_fk;
DROP INDEX IF EXISTS public.cuentas_pk;
DROP INDEX IF EXISTS public.cuenta_de_usuario_fk;
DROP INDEX IF EXISTS public.creditos_pk;
DROP INDEX IF EXISTS public.compras_pk;
DROP INDEX IF EXISTS public.compras_items_pk;
DROP INDEX IF EXISTS public.compra_a_credito_fk;
DROP INDEX IF EXISTS public.clientes_pk;
DROP INDEX IF EXISTS public.articulo_comprado_fk;
DROP INDEX IF EXISTS public.almacenes_pk;
DROP TABLE IF EXISTS public.ventas;
DROP SEQUENCE IF EXISTS public.venta_id_seq;
DROP TABLE IF EXISTS public.roles;
DROP SEQUENCE IF EXISTS public.roles_id_seq;
DROP TABLE IF EXISTS public.proveedores;
DROP SEQUENCE IF EXISTS public.proveedores_id_seq;
DROP TABLE IF EXISTS public.plan_pagos;
DROP SEQUENCE IF EXISTS public.plan_pagos_id_plan_de_pago_seq;
DROP TABLE IF EXISTS public.piezas;
DROP SEQUENCE IF EXISTS public.piezas_id_seq;
DROP TABLE IF EXISTS public.nota_de_ventas;
DROP TABLE IF EXISTS public.marcas;
DROP SEQUENCE IF EXISTS public.marcas_id_seq;
DROP TABLE IF EXISTS public.items;
DROP SEQUENCE IF EXISTS public.items_id_articulo_seq;
DROP TABLE IF EXISTS public.industrias;
DROP SEQUENCE IF EXISTS public.industrias_id_seq;
DROP TABLE IF EXISTS public.grupos;
DROP SEQUENCE IF EXISTS public.grupos_id_seq;
DROP TABLE IF EXISTS public.facturas;
DROP SEQUENCE IF EXISTS public.facturas_id_seq;
DROP TABLE IF EXISTS public.factura_items;
DROP SEQUENCE IF EXISTS public.factura_items_identificador_venta_seq;
DROP TABLE IF EXISTS public.empleados;
DROP SEQUENCE IF EXISTS public.empleados_id_seq;
DROP TABLE IF EXISTS public.dosificaciones;
DROP SEQUENCE IF EXISTS public.dosificaciones_id_seq;
DROP TABLE IF EXISTS public.detalle_nota_ventas;
DROP SEQUENCE IF EXISTS public.detalle_nota_venta_registro_seq;
DROP TABLE IF EXISTS public.descuentos;
DROP SEQUENCE IF EXISTS public.descuentos_id_seq;
DROP TABLE IF EXISTS public.cuotas;
DROP SEQUENCE IF EXISTS public.cuotas_id_seq;
DROP TABLE IF EXISTS public.cuentas;
DROP SEQUENCE IF EXISTS public.cuentas_id_seq;
DROP TABLE IF EXISTS public.creditos;
DROP SEQUENCE IF EXISTS public.creditos_id_seq;
DROP TABLE IF EXISTS public.compras_items;
DROP SEQUENCE IF EXISTS public.compras_items_identificador_compra_seq;
DROP TABLE IF EXISTS public.compras;
DROP SEQUENCE IF EXISTS public.compras_id_seq;
DROP TABLE IF EXISTS public.clientes;
DROP SEQUENCE IF EXISTS public.clientes_id_seq;
DROP TABLE IF EXISTS public.almacenes;
DROP SEQUENCE IF EXISTS public.almacenes_id_seq;
DROP SCHEMA IF EXISTS inventarios;
CREATE SCHEMA inventarios AUTHORIZATION postgres;
SET check_function_bodies = false;
--
-- Definition for sequence almacenes_id_seq (OID = 16395) : 
--
CREATE SEQUENCE public.almacenes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table almacenes (OID = 16397) : 
--
CREATE TABLE public.almacenes (
    id integer DEFAULT nextval('almacenes_id_seq'::regclass) NOT NULL,
    nombre_almacen varchar(50),
    descripcion_almacen varchar(255),
    direccion_almacen varchar(255)
) WITHOUT OIDS;
--
-- Definition for sequence clientes_id_seq (OID = 16404) : 
--
CREATE SEQUENCE public.clientes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table clientes (OID = 16406) : 
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
-- Definition for sequence compras_id_seq (OID = 16410) : 
--
CREATE SEQUENCE public.compras_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table compras (OID = 16412) : 
--
CREATE TABLE public.compras (
    id integer DEFAULT nextval('compras_id_seq'::regclass) NOT NULL,
    credito_id integer,
    empleado_id integer NOT NULL,
    proveedor_id integer NOT NULL,
    fecha_compra date,
    monto_total integer
) WITHOUT OIDS;
--
-- Definition for sequence compras_items_identificador_compra_seq (OID = 16416) : 
--
CREATE SEQUENCE public.compras_items_identificador_compra_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table compras_items (OID = 16418) : 
--
CREATE TABLE public.compras_items (
    id integer DEFAULT nextval('compras_items_identificador_compra_seq'::regclass) NOT NULL,
    item_id integer NOT NULL,
    compra_id integer NOT NULL,
    precio_de_compra numeric(10,2),
    recio_referencial_de_vewnta numeric(10,2),
    garantia integer
) WITHOUT OIDS;
--
-- Definition for sequence creditos_id_seq (OID = 16422) : 
--
CREATE SEQUENCE public.creditos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table creditos (OID = 16424) : 
--
CREATE TABLE public.creditos (
    id integer DEFAULT nextval('creditos_id_seq'::regclass) NOT NULL,
    venta_id integer NOT NULL,
    cuota_inicial numeric(10,2)
) WITHOUT OIDS;
--
-- Definition for sequence cuentas_id_seq (OID = 16428) : 
--
CREATE SEQUENCE public.cuentas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table cuentas (OID = 16430) : 
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
-- Definition for sequence cuotas_id_seq (OID = 16434) : 
--
CREATE SEQUENCE public.cuotas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table cuotas (OID = 16436) : 
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
-- Definition for sequence descuentos_id_seq (OID = 16440) : 
--
CREATE SEQUENCE public.descuentos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table descuentos (OID = 16442) : 
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
-- Definition for sequence detalle_nota_venta_registro_seq (OID = 16446) : 
--
CREATE SEQUENCE public.detalle_nota_venta_registro_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table detalle_nota_ventas (OID = 16448) : 
--
CREATE TABLE public.detalle_nota_ventas (
    id integer DEFAULT nextval('detalle_nota_venta_registro_seq'::regclass) NOT NULL,
    item_id integer NOT NULL,
    nota_de_venta_id integer,
    cantidad integer,
    precio_venta numeric(10,2)
) WITHOUT OIDS;
--
-- Definition for sequence dosificaciones_id_seq (OID = 16452) : 
--
CREATE SEQUENCE public.dosificaciones_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table dosificaciones (OID = 16454) : 
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
-- Definition for sequence empleados_id_seq (OID = 16458) : 
--
CREATE SEQUENCE public.empleados_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table empleados (OID = 16460) : 
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
-- Definition for sequence factura_items_identificador_venta_seq (OID = 16464) : 
--
CREATE SEQUENCE public.factura_items_identificador_venta_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table factura_items (OID = 16466) : 
--
CREATE TABLE public.factura_items (
    id integer DEFAULT nextval('factura_items_identificador_venta_seq'::regclass) NOT NULL,
    item_id integer NOT NULL,
    factura_id integer NOT NULL,
    cantidad integer,
    precio_venta numeric(10,2)
) WITHOUT OIDS;
--
-- Definition for sequence facturas_id_seq (OID = 16470) : 
--
CREATE SEQUENCE public.facturas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table facturas (OID = 16472) : 
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
-- Definition for sequence grupos_id_seq (OID = 16476) : 
--
CREATE SEQUENCE public.grupos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table grupos (OID = 16478) : 
--
CREATE TABLE public.grupos (
    id integer DEFAULT nextval('grupos_id_seq'::regclass) NOT NULL,
    grupo_id integer,
    nombre_grupo varchar(50),
    descripcion_grupo varchar(255),
    codigo varchar(5)
) WITHOUT OIDS;
--
-- Definition for sequence industrias_id_seq (OID = 16482) : 
--
CREATE SEQUENCE public.industrias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table industrias (OID = 16484) : 
--
CREATE TABLE public.industrias (
    id integer DEFAULT nextval('industrias_id_seq'::regclass) NOT NULL,
    nombre_industria varchar(100),
    descripcion_industria varchar(255)
) WITHOUT OIDS;
--
-- Definition for sequence items_id_articulo_seq (OID = 16488) : 
--
CREATE SEQUENCE public.items_id_articulo_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table items (OID = 16490) : 
--
CREATE TABLE public.items (
    id integer DEFAULT nextval('items_id_articulo_seq'::regclass) NOT NULL,
    marca_id integer NOT NULL,
    grupo_id integer NOT NULL,
    industria_id integer NOT NULL,
    almacen_id integer NOT NULL,
    nombre_articulo varchar(100),
    descripcion varchar(255),
    numero_de_serie varchar(100),
    codigo varchar(10)
) WITHOUT OIDS;
--
-- Definition for sequence marcas_id_seq (OID = 16494) : 
--
CREATE SEQUENCE public.marcas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table marcas (OID = 16496) : 
--
CREATE TABLE public.marcas (
    id integer DEFAULT nextval('marcas_id_seq'::regclass) NOT NULL,
    nombre_marca varchar(50),
    descripcion_marca varchar(255)
) WITHOUT OIDS;
--
-- Structure for table nota_de_ventas (OID = 16500) : 
--
CREATE TABLE public.nota_de_ventas (
    id integer NOT NULL,
    venta_id integer NOT NULL,
    fecha_nota_venta date,
    monto_total integer
) WITHOUT OIDS;
--
-- Definition for sequence piezas_id_seq (OID = 16503) : 
--
CREATE SEQUENCE public.piezas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table piezas (OID = 16505) : 
--
CREATE TABLE public.piezas (
    id integer DEFAULT nextval('piezas_id_seq'::regclass) NOT NULL,
    articulo_id integer NOT NULL,
    nombre_pieza varchar(50),
    numero_de_serie varchar(100),
    descripcion_pieza varchar(255)
) WITHOUT OIDS;
--
-- Definition for sequence plan_pagos_id_plan_de_pago_seq (OID = 16509) : 
--
CREATE SEQUENCE public.plan_pagos_id_plan_de_pago_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table plan_pagos (OID = 16511) : 
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
-- Definition for sequence proveedores_id_seq (OID = 16515) : 
--
CREATE SEQUENCE public.proveedores_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table proveedores (OID = 16517) : 
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
-- Definition for sequence roles_id_seq (OID = 16524) : 
--
CREATE SEQUENCE public.roles_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table roles (OID = 16526) : 
--
CREATE TABLE public.roles (
    id integer DEFAULT nextval('roles_id_seq'::regclass) NOT NULL,
    nombre_rol varchar(20),
    descripcion varchar(255)
) WITHOUT OIDS;
--
-- Definition for sequence venta_id_seq (OID = 16530) : 
--
CREATE SEQUENCE public.venta_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table ventas (OID = 16532) : 
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
-- Data for table public.grupos (OID = 16478) (LIMIT 0,4)
--
INSERT INTO grupos (id, grupo_id, nombre_grupo, descripcion_grupo, codigo)
VALUES (1, NULL, 'Articulo para venta', '', NULL);

INSERT INTO grupos (id, grupo_id, nombre_grupo, descripcion_grupo, codigo)
VALUES (5, 1, 'Equipos de Sonido', 'Todo tipo de equipos de sonido como ser radios, componentes, etc', NULL);

INSERT INTO grupos (id, grupo_id, nombre_grupo, descripcion_grupo, codigo)
VALUES (7, 1, 'ghfhgf', 'u200bhgfdhgfh', '4444');

INSERT INTO grupos (id, grupo_id, nombre_grupo, descripcion_grupo, codigo)
VALUES (8, 1, 'gfdgfd', 'u200bgfdgfd', 'dgfdg');

--
-- Data for table public.proveedores (OID = 16517) (LIMIT 0,1)
--
INSERT INTO proveedores (id, nombre_proveedor, direccion_proveedor, telefono, contacto, email, email_contacto, telefono_contacto)
VALUES (2, 'gdfzgfdg', 'gfdg', 5435, 'gfdgfds', 'gfhg@fdsfds.vv', 'gfdsgfd@dsfdsf.ff', 455775);

--
-- Data for table public.roles (OID = 16526) (LIMIT 0,2)
--
INSERT INTO roles (id, nombre_rol, descripcion)
VALUES (1, 'Administrador', 'Cuenta con todos los privilegios');

INSERT INTO roles (id, nombre_rol, descripcion)
VALUES (2, 'Vendedor', 'Empleado que realiza ventas');

--
-- Definition for index almacenes_pk (OID = 16536) : 
--
CREATE UNIQUE INDEX almacenes_pk ON almacenes USING btree (id);
--
-- Definition for index articulo_comprado_fk (OID = 16537) : 
--
CREATE INDEX articulo_comprado_fk ON compras_items USING btree (item_id);
--
-- Definition for index clientes_pk (OID = 16538) : 
--
CREATE UNIQUE INDEX clientes_pk ON clientes USING btree (id);
--
-- Definition for index compra_a_credito_fk (OID = 16539) : 
--
CREATE INDEX compra_a_credito_fk ON compras USING btree (credito_id);
--
-- Definition for index compras_items_pk (OID = 16540) : 
--
CREATE UNIQUE INDEX compras_items_pk ON compras_items USING btree (id);
--
-- Definition for index compras_pk (OID = 16541) : 
--
CREATE UNIQUE INDEX compras_pk ON compras USING btree (id);
--
-- Definition for index creditos_pk (OID = 16542) : 
--
CREATE UNIQUE INDEX creditos_pk ON creditos USING btree (id);
--
-- Definition for index cuenta_de_usuario_fk (OID = 16543) : 
--
CREATE INDEX cuenta_de_usuario_fk ON cuentas USING btree (empleado_id);
--
-- Definition for index cuentas_pk (OID = 16544) : 
--
CREATE UNIQUE INDEX cuentas_pk ON cuentas USING btree (id);
--
-- Definition for index cuotas_pagadas_fk (OID = 16545) : 
--
CREATE INDEX cuotas_pagadas_fk ON cuotas USING btree (plan_pago_id);
--
-- Definition for index cuotas_pk (OID = 16546) : 
--
CREATE UNIQUE INDEX cuotas_pk ON cuotas USING btree (id);
--
-- Definition for index descuentos_pk (OID = 16547) : 
--
CREATE UNIQUE INDEX descuentos_pk ON descuentos USING btree (id);
--
-- Definition for index detalle_nota_venta_pk (OID = 16548) : 
--
CREATE UNIQUE INDEX detalle_nota_venta_pk ON detalle_nota_ventas USING btree (id);
--
-- Definition for index dosificaciones_pk (OID = 16549) : 
--
CREATE UNIQUE INDEX dosificaciones_pk ON dosificaciones USING btree (id);
--
-- Definition for index empleados_pk (OID = 16550) : 
--
CREATE UNIQUE INDEX empleados_pk ON empleados USING btree (id);
--
-- Definition for index es_almacenado_fk (OID = 16551) : 
--
CREATE INDEX es_almacenado_fk ON items USING btree (almacen_id);
--
-- Definition for index es_detallado_fk (OID = 16552) : 
--
CREATE INDEX es_detallado_fk ON compras_items USING btree (compra_id);
--
-- Definition for index esta_en_una_factura_fk (OID = 16553) : 
--
CREATE INDEX esta_en_una_factura_fk ON factura_items USING btree (item_id);
--
-- Definition for index factura_items_pk (OID = 16554) : 
--
CREATE UNIQUE INDEX factura_items_pk ON factura_items USING btree (id);
--
-- Definition for index facturas_pk (OID = 16555) : 
--
CREATE UNIQUE INDEX facturas_pk ON facturas USING btree (dosificacion_id, id);
--
-- Definition for index grupos_pk (OID = 16556) : 
--
CREATE UNIQUE INDEX grupos_pk ON grupos USING btree (id);
--
-- Definition for index industrias_pk (OID = 16557) : 
--
CREATE UNIQUE INDEX industrias_pk ON industrias USING btree (id);
--
-- Definition for index items_pk (OID = 16558) : 
--
CREATE UNIQUE INDEX items_pk ON items USING btree (id);
--
-- Definition for index marcas_pk (OID = 16559) : 
--
CREATE UNIQUE INDEX marcas_pk ON marcas USING btree (id);
--
-- Definition for index nota_de_venta_pk (OID = 16560) : 
--
CREATE UNIQUE INDEX nota_de_venta_pk ON nota_de_ventas USING btree (id);
--
-- Definition for index pertenece_a_un_grupo_fk (OID = 16561) : 
--
CREATE INDEX pertenece_a_un_grupo_fk ON items USING btree (grupo_id);
--
-- Definition for index piezas_pk (OID = 16562) : 
--
CREATE UNIQUE INDEX piezas_pk ON piezas USING btree (id);
--
-- Definition for index plan_pagos_pk (OID = 16563) : 
--
CREATE UNIQUE INDEX plan_pagos_pk ON plan_pagos USING btree (id);
--
-- Definition for index proveedores_pk (OID = 16564) : 
--
CREATE UNIQUE INDEX proveedores_pk ON proveedores USING btree (id);
--
-- Definition for index realiza_una_venta_fk (OID = 16565) : 
--
CREATE INDEX realiza_una_venta_fk ON ventas USING btree (empleado_id);
--
-- Definition for index registra_una_compra_fk (OID = 16566) : 
--
CREATE INDEX registra_una_compra_fk ON compras USING btree (empleado_id);
--
-- Definition for index roles_pk (OID = 16567) : 
--
CREATE UNIQUE INDEX roles_pk ON roles USING btree (id);
--
-- Definition for index tiene_detalle_de_venta_fk (OID = 16568) : 
--
CREATE INDEX tiene_detalle_de_venta_fk ON detalle_nota_ventas USING btree (nota_de_venta_id);
--
-- Definition for index tiene_detalle_nota_fk (OID = 16569) : 
--
CREATE INDEX tiene_detalle_nota_fk ON detalle_nota_ventas USING btree (item_id);
--
-- Definition for index tiene_dosificacion_fk (OID = 16570) : 
--
CREATE INDEX tiene_dosificacion_fk ON facturas USING btree (dosificacion_id);
--
-- Definition for index tiene_factura_fk (OID = 16571) : 
--
CREATE INDEX tiene_factura_fk ON facturas USING btree (venta_id);
--
-- Definition for index tiene_industria_fk (OID = 16572) : 
--
CREATE INDEX tiene_industria_fk ON items USING btree (industria_id);
--
-- Definition for index tiene_marca_fk (OID = 16573) : 
--
CREATE INDEX tiene_marca_fk ON items USING btree (marca_id);
--
-- Definition for index tiene_nota_de_venta_fk (OID = 16574) : 
--
CREATE INDEX tiene_nota_de_venta_fk ON nota_de_ventas USING btree (venta_id);
--
-- Definition for index tiene_piezas_fk (OID = 16575) : 
--
CREATE INDEX tiene_piezas_fk ON piezas USING btree (articulo_id);
--
-- Definition for index tiene_plan_de_pago_fk (OID = 16576) : 
--
CREATE INDEX tiene_plan_de_pago_fk ON plan_pagos USING btree (credito_id);
--
-- Definition for index tiene_proveedor_fk (OID = 16577) : 
--
CREATE INDEX tiene_proveedor_fk ON compras USING btree (proveedor_id);
--
-- Definition for index tiene_rol_fk (OID = 16578) : 
--
CREATE INDEX tiene_rol_fk ON cuentas USING btree (rol_id);
--
-- Definition for index tiene_subgrupos_fk (OID = 16579) : 
--
CREATE INDEX tiene_subgrupos_fk ON grupos USING btree (grupo_id);
--
-- Definition for index venta__a_credito_fk (OID = 16580) : 
--
CREATE INDEX venta__a_credito_fk ON creditos USING btree (venta_id);
--
-- Definition for index venta_a_cliente_fk (OID = 16581) : 
--
CREATE INDEX venta_a_cliente_fk ON ventas USING btree (cliente_id);
--
-- Definition for index venta_con_descuento_fk (OID = 16582) : 
--
CREATE INDEX venta_con_descuento_fk ON ventas USING btree (descuento_id);
--
-- Definition for index venta_pk (OID = 16583) : 
--
CREATE UNIQUE INDEX venta_pk ON ventas USING btree (id);
--
-- Definition for index facturas_id_key (OID = 16584) : 
--
CREATE UNIQUE INDEX facturas_id_key ON facturas USING btree (id);
--
-- Definition for index pk_almacenes (OID = 16585) : 
--
ALTER TABLE ONLY almacenes
    ADD CONSTRAINT pk_almacenes
    PRIMARY KEY (id);
--
-- Definition for index pk_clientes (OID = 16587) : 
--
ALTER TABLE ONLY clientes
    ADD CONSTRAINT pk_clientes
    PRIMARY KEY (id);
--
-- Definition for index pk_compras (OID = 16589) : 
--
ALTER TABLE ONLY compras
    ADD CONSTRAINT pk_compras
    PRIMARY KEY (id);
--
-- Definition for index pk_compras_items (OID = 16591) : 
--
ALTER TABLE ONLY compras_items
    ADD CONSTRAINT pk_compras_items
    PRIMARY KEY (id);
--
-- Definition for index pk_creditos (OID = 16593) : 
--
ALTER TABLE ONLY creditos
    ADD CONSTRAINT pk_creditos
    PRIMARY KEY (id);
--
-- Definition for index pk_cuentas (OID = 16595) : 
--
ALTER TABLE ONLY cuentas
    ADD CONSTRAINT pk_cuentas
    PRIMARY KEY (id);
--
-- Definition for index pk_cuotas (OID = 16597) : 
--
ALTER TABLE ONLY cuotas
    ADD CONSTRAINT pk_cuotas
    PRIMARY KEY (id);
--
-- Definition for index pk_descuentos (OID = 16599) : 
--
ALTER TABLE ONLY descuentos
    ADD CONSTRAINT pk_descuentos
    PRIMARY KEY (id);
--
-- Definition for index pk_detalle_nota_venta (OID = 16601) : 
--
ALTER TABLE ONLY detalle_nota_ventas
    ADD CONSTRAINT pk_detalle_nota_venta
    PRIMARY KEY (id);
--
-- Definition for index pk_dosificaciones (OID = 16603) : 
--
ALTER TABLE ONLY dosificaciones
    ADD CONSTRAINT pk_dosificaciones
    PRIMARY KEY (id);
--
-- Definition for index pk_empleados (OID = 16605) : 
--
ALTER TABLE ONLY empleados
    ADD CONSTRAINT pk_empleados
    PRIMARY KEY (id);
--
-- Definition for index pk_factura_items (OID = 16607) : 
--
ALTER TABLE ONLY factura_items
    ADD CONSTRAINT pk_factura_items
    PRIMARY KEY (id);
--
-- Definition for index pk_facturas (OID = 16609) : 
--
ALTER TABLE ONLY facturas
    ADD CONSTRAINT pk_facturas
    PRIMARY KEY (dosificacion_id, id);
--
-- Definition for index pk_grupos (OID = 16611) : 
--
ALTER TABLE ONLY grupos
    ADD CONSTRAINT pk_grupos
    PRIMARY KEY (id);
--
-- Definition for index pk_industrias (OID = 16613) : 
--
ALTER TABLE ONLY industrias
    ADD CONSTRAINT pk_industrias
    PRIMARY KEY (id);
--
-- Definition for index pk_items (OID = 16615) : 
--
ALTER TABLE ONLY items
    ADD CONSTRAINT pk_items
    PRIMARY KEY (id);
--
-- Definition for index pk_marcas (OID = 16617) : 
--
ALTER TABLE ONLY marcas
    ADD CONSTRAINT pk_marcas
    PRIMARY KEY (id);
--
-- Definition for index pk_nota_de_venta (OID = 16619) : 
--
ALTER TABLE ONLY nota_de_ventas
    ADD CONSTRAINT pk_nota_de_venta
    PRIMARY KEY (id);
--
-- Definition for index pk_piezas (OID = 16621) : 
--
ALTER TABLE ONLY piezas
    ADD CONSTRAINT pk_piezas
    PRIMARY KEY (id);
--
-- Definition for index pk_plan_pagos (OID = 16623) : 
--
ALTER TABLE ONLY plan_pagos
    ADD CONSTRAINT pk_plan_pagos
    PRIMARY KEY (id);
--
-- Definition for index pk_proveedores (OID = 16625) : 
--
ALTER TABLE ONLY proveedores
    ADD CONSTRAINT pk_proveedores
    PRIMARY KEY (id);
--
-- Definition for index pk_roles (OID = 16627) : 
--
ALTER TABLE ONLY roles
    ADD CONSTRAINT pk_roles
    PRIMARY KEY (id);
--
-- Definition for index pk_venta (OID = 16629) : 
--
ALTER TABLE ONLY ventas
    ADD CONSTRAINT pk_venta
    PRIMARY KEY (id);
--
-- Definition for index fk_compras__articulo__items (OID = 16631) : 
--
ALTER TABLE ONLY compras_items
    ADD CONSTRAINT fk_compras__articulo__items
    FOREIGN KEY (item_id) REFERENCES items(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_compras__es_detall_compras (OID = 16636) : 
--
ALTER TABLE ONLY compras_items
    ADD CONSTRAINT fk_compras__es_detall_compras
    FOREIGN KEY (compra_id) REFERENCES compras(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_compras_compra_a__creditos (OID = 16641) : 
--
ALTER TABLE ONLY compras
    ADD CONSTRAINT fk_compras_compra_a__creditos
    FOREIGN KEY (credito_id) REFERENCES creditos(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_compras_registra__empleado (OID = 16646) : 
--
ALTER TABLE ONLY compras
    ADD CONSTRAINT fk_compras_registra__empleado
    FOREIGN KEY (empleado_id) REFERENCES empleados(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_compras_tiene_pro_proveedo (OID = 16651) : 
--
ALTER TABLE ONLY compras
    ADD CONSTRAINT fk_compras_tiene_pro_proveedo
    FOREIGN KEY (proveedor_id) REFERENCES proveedores(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_creditos_venta__a__venta (OID = 16656) : 
--
ALTER TABLE ONLY creditos
    ADD CONSTRAINT fk_creditos_venta__a__venta
    FOREIGN KEY (venta_id) REFERENCES ventas(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_cuentas_cuenta_de_empleado (OID = 16661) : 
--
ALTER TABLE ONLY cuentas
    ADD CONSTRAINT fk_cuentas_cuenta_de_empleado
    FOREIGN KEY (empleado_id) REFERENCES empleados(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_cuentas_tiene_rol_roles (OID = 16666) : 
--
ALTER TABLE ONLY cuentas
    ADD CONSTRAINT fk_cuentas_tiene_rol_roles
    FOREIGN KEY (rol_id) REFERENCES roles(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_cuotas_cuotas_pa_plan_pag (OID = 16671) : 
--
ALTER TABLE ONLY cuotas
    ADD CONSTRAINT fk_cuotas_cuotas_pa_plan_pag
    FOREIGN KEY (plan_pago_id) REFERENCES plan_pagos(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_detalle__tiene_det_items (OID = 16676) : 
--
ALTER TABLE ONLY detalle_nota_ventas
    ADD CONSTRAINT fk_detalle__tiene_det_items
    FOREIGN KEY (item_id) REFERENCES items(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_detalle__tiene_det_nota_de_ (OID = 16681) : 
--
ALTER TABLE ONLY detalle_nota_ventas
    ADD CONSTRAINT fk_detalle__tiene_det_nota_de_
    FOREIGN KEY (nota_de_venta_id) REFERENCES nota_de_ventas(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_factura__esta_en_u_items (OID = 16686) : 
--
ALTER TABLE ONLY factura_items
    ADD CONSTRAINT fk_factura__esta_en_u_items
    FOREIGN KEY (item_id) REFERENCES items(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_facturas_tiene_dos_dosifica (OID = 16691) : 
--
ALTER TABLE ONLY facturas
    ADD CONSTRAINT fk_facturas_tiene_dos_dosifica
    FOREIGN KEY (dosificacion_id) REFERENCES dosificaciones(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_facturas_tiene_fac_venta (OID = 16696) : 
--
ALTER TABLE ONLY facturas
    ADD CONSTRAINT fk_facturas_tiene_fac_venta
    FOREIGN KEY (venta_id) REFERENCES ventas(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_grupos_tiene_sub_grupos (OID = 16701) : 
--
ALTER TABLE ONLY grupos
    ADD CONSTRAINT fk_grupos_tiene_sub_grupos
    FOREIGN KEY (grupo_id) REFERENCES grupos(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_items_es_almace_almacene (OID = 16706) : 
--
ALTER TABLE ONLY items
    ADD CONSTRAINT fk_items_es_almace_almacene
    FOREIGN KEY (almacen_id) REFERENCES almacenes(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_items_pertenece_grupos (OID = 16711) : 
--
ALTER TABLE ONLY items
    ADD CONSTRAINT fk_items_pertenece_grupos
    FOREIGN KEY (grupo_id) REFERENCES grupos(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_items_tiene_ind_industri (OID = 16716) : 
--
ALTER TABLE ONLY items
    ADD CONSTRAINT fk_items_tiene_ind_industri
    FOREIGN KEY (industria_id) REFERENCES industrias(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_items_tiene_mar_marcas (OID = 16721) : 
--
ALTER TABLE ONLY items
    ADD CONSTRAINT fk_items_tiene_mar_marcas
    FOREIGN KEY (marca_id) REFERENCES marcas(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_nota_de__tiene_not_venta (OID = 16726) : 
--
ALTER TABLE ONLY nota_de_ventas
    ADD CONSTRAINT fk_nota_de__tiene_not_venta
    FOREIGN KEY (venta_id) REFERENCES ventas(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_piezas_tiene_pie_items (OID = 16731) : 
--
ALTER TABLE ONLY piezas
    ADD CONSTRAINT fk_piezas_tiene_pie_items
    FOREIGN KEY (articulo_id) REFERENCES items(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_plan_pag_tiene_pla_creditos (OID = 16736) : 
--
ALTER TABLE ONLY plan_pagos
    ADD CONSTRAINT fk_plan_pag_tiene_pla_creditos
    FOREIGN KEY (credito_id) REFERENCES creditos(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_venta_realiza_u_empleado (OID = 16741) : 
--
ALTER TABLE ONLY ventas
    ADD CONSTRAINT fk_venta_realiza_u_empleado
    FOREIGN KEY (empleado_id) REFERENCES empleados(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_venta_venta_a_c_clientes (OID = 16746) : 
--
ALTER TABLE ONLY ventas
    ADD CONSTRAINT fk_venta_venta_a_c_clientes
    FOREIGN KEY (cliente_id) REFERENCES clientes(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_venta_venta_con_descuent (OID = 16751) : 
--
ALTER TABLE ONLY ventas
    ADD CONSTRAINT fk_venta_venta_con_descuent
    FOREIGN KEY (descuento_id) REFERENCES descuentos(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_tiene_detalle_factura (OID = 16756) : 
--
ALTER TABLE ONLY factura_items
    ADD CONSTRAINT fk_tiene_detalle_factura
    FOREIGN KEY (factura_id) REFERENCES facturas(id);
--
-- Data for sequence public.almacenes_id_seq (OID = 16395)
--
SELECT pg_catalog.setval('almacenes_id_seq', 1, false);
--
-- Data for sequence public.clientes_id_seq (OID = 16404)
--
SELECT pg_catalog.setval('clientes_id_seq', 1, false);
--
-- Data for sequence public.compras_id_seq (OID = 16410)
--
SELECT pg_catalog.setval('compras_id_seq', 1, false);
--
-- Data for sequence public.compras_items_identificador_compra_seq (OID = 16416)
--
SELECT pg_catalog.setval('compras_items_identificador_compra_seq', 1, false);
--
-- Data for sequence public.creditos_id_seq (OID = 16422)
--
SELECT pg_catalog.setval('creditos_id_seq', 1, false);
--
-- Data for sequence public.cuentas_id_seq (OID = 16428)
--
SELECT pg_catalog.setval('cuentas_id_seq', 1, false);
--
-- Data for sequence public.cuotas_id_seq (OID = 16434)
--
SELECT pg_catalog.setval('cuotas_id_seq', 1, false);
--
-- Data for sequence public.descuentos_id_seq (OID = 16440)
--
SELECT pg_catalog.setval('descuentos_id_seq', 1, false);
--
-- Data for sequence public.detalle_nota_venta_registro_seq (OID = 16446)
--
SELECT pg_catalog.setval('detalle_nota_venta_registro_seq', 1, false);
--
-- Data for sequence public.dosificaciones_id_seq (OID = 16452)
--
SELECT pg_catalog.setval('dosificaciones_id_seq', 1, false);
--
-- Data for sequence public.empleados_id_seq (OID = 16458)
--
SELECT pg_catalog.setval('empleados_id_seq', 1, false);
--
-- Data for sequence public.factura_items_identificador_venta_seq (OID = 16464)
--
SELECT pg_catalog.setval('factura_items_identificador_venta_seq', 1, false);
--
-- Data for sequence public.facturas_id_seq (OID = 16470)
--
SELECT pg_catalog.setval('facturas_id_seq', 1, false);
--
-- Data for sequence public.grupos_id_seq (OID = 16476)
--
SELECT pg_catalog.setval('grupos_id_seq', 9, true);
--
-- Data for sequence public.industrias_id_seq (OID = 16482)
--
SELECT pg_catalog.setval('industrias_id_seq', 1, false);
--
-- Data for sequence public.items_id_articulo_seq (OID = 16488)
--
SELECT pg_catalog.setval('items_id_articulo_seq', 1, false);
--
-- Data for sequence public.marcas_id_seq (OID = 16494)
--
SELECT pg_catalog.setval('marcas_id_seq', 1, false);
--
-- Data for sequence public.piezas_id_seq (OID = 16503)
--
SELECT pg_catalog.setval('piezas_id_seq', 1, false);
--
-- Data for sequence public.plan_pagos_id_plan_de_pago_seq (OID = 16509)
--
SELECT pg_catalog.setval('plan_pagos_id_plan_de_pago_seq', 1, false);
--
-- Data for sequence public.proveedores_id_seq (OID = 16515)
--
SELECT pg_catalog.setval('proveedores_id_seq', 6, true);
--
-- Data for sequence public.roles_id_seq (OID = 16524)
--
SELECT pg_catalog.setval('roles_id_seq', 2, true);
--
-- Data for sequence public.venta_id_seq (OID = 16530)
--
SELECT pg_catalog.setval('venta_id_seq', 1, false);
--
-- Comments
--
COMMENT ON SCHEMA public IS 'standard public schema';
