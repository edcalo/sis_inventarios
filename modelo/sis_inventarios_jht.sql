-- SQL Manager Lite for PostgreSQL 5.1.1.1
-- ---------------------------------------
-- Host      : localhost
-- Database  : sis_inventarios2
-- Version   : PostgreSQL 9.1.3, compiled by Visual C++ build 1500, 32-bit



CREATE SCHEMA inventarios AUTHORIZATION postgres;
SET check_function_bodies = false;
--
-- Definition for sequence almacenes_id_seq (OID = 16771) :
--
SET search_path = public, pg_catalog;
CREATE SEQUENCE public.almacenes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table almacenes (OID = 16773) :
--
CREATE TABLE public.almacenes (
    id integer DEFAULT nextval('almacenes_id_seq'::regclass) NOT NULL,
    nombre_almacen varchar(50),
    descripcion_almacen varchar(255),
    direccion_almacen varchar(255)
) WITHOUT OIDS;
--
-- Definition for sequence clientes_id_seq (OID = 16780) :
--
CREATE SEQUENCE public.clientes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table clientes (OID = 16782) :
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
-- Definition for sequence compras_id_seq (OID = 16786) :
--
CREATE SEQUENCE public.compras_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table compras (OID = 16788) :
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
-- Definition for sequence compras_items_identificador_compra_seq (OID = 16792) :
--
CREATE SEQUENCE public.compras_items_identificador_compra_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table compras_items (OID = 16794) :
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
-- Definition for sequence creditos_id_seq (OID = 16798) :
--
CREATE SEQUENCE public.creditos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table creditos (OID = 16800) :
--
CREATE TABLE public.creditos (
    id integer DEFAULT nextval('creditos_id_seq'::regclass) NOT NULL,
    venta_id integer NOT NULL,
    cuota_inicial numeric(10,2)
) WITHOUT OIDS;
--
-- Definition for sequence cuentas_id_seq (OID = 16804) :
--
CREATE SEQUENCE public.cuentas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table cuentas (OID = 16806) :
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
-- Definition for sequence cuotas_id_seq (OID = 16810) :
--
CREATE SEQUENCE public.cuotas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table cuotas (OID = 16812) :
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
-- Definition for sequence descuentos_id_seq (OID = 16816) :
--
CREATE SEQUENCE public.descuentos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table descuentos (OID = 16818) :
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
-- Definition for sequence detalle_nota_venta_registro_seq (OID = 16822) :
--
CREATE SEQUENCE public.detalle_nota_venta_registro_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table detalle_nota_ventas (OID = 16824) :
--
CREATE TABLE public.detalle_nota_ventas (
    id integer DEFAULT nextval('detalle_nota_venta_registro_seq'::regclass) NOT NULL,
    item_id integer NOT NULL,
    nota_de_venta_id integer,
    cantidad integer,
    precio_venta numeric(10,2)
) WITHOUT OIDS;
--
-- Definition for sequence dosificaciones_id_seq (OID = 16828) :
--
CREATE SEQUENCE public.dosificaciones_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table dosificaciones (OID = 16830) :
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
-- Definition for sequence empleados_id_seq (OID = 16834) :
--
CREATE SEQUENCE public.empleados_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table empleados (OID = 16836) :
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
-- Definition for sequence factura_items_identificador_venta_seq (OID = 16840) :
--
CREATE SEQUENCE public.factura_items_identificador_venta_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table factura_items (OID = 16842) :
--
CREATE TABLE public.factura_items (
    id integer DEFAULT nextval('factura_items_identificador_venta_seq'::regclass) NOT NULL,
    item_id integer NOT NULL,
    factura_id integer NOT NULL,
    cantidad integer,
    precio_venta numeric(10,2)
) WITHOUT OIDS;
--
-- Definition for sequence facturas_id_seq (OID = 16846) :
--
CREATE SEQUENCE public.facturas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table facturas (OID = 16848) :
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
-- Definition for sequence grupos_id_seq (OID = 16852) :
--
CREATE SEQUENCE public.grupos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table grupos (OID = 16854) :
--
CREATE TABLE public.grupos (
    id integer DEFAULT nextval('grupos_id_seq'::regclass) NOT NULL,
    grupo_id integer,
    nombre_grupo varchar(50),
    descripcion_grupo varchar(255),
    codigo varchar(5)
) WITHOUT OIDS;
--
-- Definition for sequence industrias_id_seq (OID = 16858) :
--
CREATE SEQUENCE public.industrias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table industrias (OID = 16860) :
--
CREATE TABLE public.industrias (
    id integer DEFAULT nextval('industrias_id_seq'::regclass) NOT NULL,
    nombre_industria varchar(100),
    descripcion_industria varchar(255)
) WITHOUT OIDS;
--
-- Definition for sequence items_id_articulo_seq (OID = 16864) :
--
CREATE SEQUENCE public.items_id_articulo_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table items (OID = 16866) :
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
-- Definition for sequence marcas_id_seq (OID = 16870) :
--
CREATE SEQUENCE public.marcas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table marcas (OID = 16872) :
--
CREATE TABLE public.marcas (
    id integer DEFAULT nextval('marcas_id_seq'::regclass) NOT NULL,
    nombre_marca varchar(50),
    descripcion_marca varchar(255)
) WITHOUT OIDS;
--
-- Structure for table nota_de_ventas (OID = 16876) :
--
CREATE TABLE public.nota_de_ventas (
    id integer NOT NULL,
    venta_id integer NOT NULL,
    fecha_nota_venta date,
    monto_total integer
) WITHOUT OIDS;
--
-- Definition for sequence piezas_id_seq (OID = 16879) :
--
CREATE SEQUENCE public.piezas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table piezas (OID = 16881) :
--
CREATE TABLE public.piezas (
    id integer DEFAULT nextval('piezas_id_seq'::regclass) NOT NULL,
    articulo_id integer NOT NULL,
    nombre_pieza varchar(50),
    numero_de_serie varchar(100),
    descripcion_pieza varchar(255)
) WITHOUT OIDS;
--
-- Definition for sequence plan_pagos_id_plan_de_pago_seq (OID = 16885) :
--
CREATE SEQUENCE public.plan_pagos_id_plan_de_pago_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table plan_pagos (OID = 16887) :
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
-- Definition for sequence proveedores_id_seq (OID = 16891) :
--
CREATE SEQUENCE public.proveedores_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table proveedores (OID = 16893) :
--
CREATE TABLE public.proveedores (
    id integer DEFAULT nextval('proveedores_id_seq'::regclass) NOT NULL,
    nombre_proveedor varchar(100),
    direccion_proveedor varchar(255),
    telefono integer,
    contacto varchar(255),
    email varchar(50),
    email_contacto varchar(100)
) WITHOUT OIDS;
--
-- Definition for sequence roles_id_seq (OID = 16900) :
--
CREATE SEQUENCE public.roles_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table roles (OID = 16902) :
--
CREATE TABLE public.roles (
    id integer DEFAULT nextval('roles_id_seq'::regclass) NOT NULL,
    nombre_rol varchar(20),
    descripcion varchar(255)
) WITHOUT OIDS;
--
-- Definition for sequence venta_id_seq (OID = 16906) :
--
CREATE SEQUENCE public.venta_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;
--
-- Structure for table ventas (OID = 16908) :
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
-- Data for table public.grupos (OID = 16854) (LIMIT 0,2)
--
INSERT INTO grupos (id, grupo_id, nombre_grupo, descripcion_grupo, codigo)
VALUES (4, NULL, 'Articulo para venta', '', NULL);

INSERT INTO grupos (id, grupo_id, nombre_grupo, descripcion_grupo, codigo)
VALUES (5, 4, 'Equipos de Sonido', 'Todo tipo de equipos de sonido como ser radios, componentes, etc', NULL);

--
-- Data for table public.roles (OID = 16902) (LIMIT 0,2)
--
INSERT INTO roles (id, nombre_rol, descripcion)
VALUES (1, 'Administrador', 'Cuenta con todos los privilegios');

INSERT INTO roles (id, nombre_rol, descripcion)
VALUES (2, 'Vendedor', 'Empleado que realiza ventas');

--
-- Definition for index almacenes_pk (OID = 16912) :
--
CREATE UNIQUE INDEX almacenes_pk ON almacenes USING btree (id);
--
-- Definition for index articulo_comprado_fk (OID = 16913) :
--
CREATE INDEX articulo_comprado_fk ON compras_items USING btree (item_id);
--
-- Definition for index clientes_pk (OID = 16914) :
--
CREATE UNIQUE INDEX clientes_pk ON clientes USING btree (id);
--
-- Definition for index compra_a_credito_fk (OID = 16915) :
--
CREATE INDEX compra_a_credito_fk ON compras USING btree (credito_id);
--
-- Definition for index compras_items_pk (OID = 16916) :
--
CREATE UNIQUE INDEX compras_items_pk ON compras_items USING btree (id);
--
-- Definition for index compras_pk (OID = 16917) :
--
CREATE UNIQUE INDEX compras_pk ON compras USING btree (id);
--
-- Definition for index creditos_pk (OID = 16918) :
--
CREATE UNIQUE INDEX creditos_pk ON creditos USING btree (id);
--
-- Definition for index cuenta_de_usuario_fk (OID = 16919) :
--
CREATE INDEX cuenta_de_usuario_fk ON cuentas USING btree (empleado_id);
--
-- Definition for index cuentas_pk (OID = 16920) :
--
CREATE UNIQUE INDEX cuentas_pk ON cuentas USING btree (id);
--
-- Definition for index cuotas_pagadas_fk (OID = 16921) :
--
CREATE INDEX cuotas_pagadas_fk ON cuotas USING btree (plan_pago_id);
--
-- Definition for index cuotas_pk (OID = 16922) :
--
CREATE UNIQUE INDEX cuotas_pk ON cuotas USING btree (id);
--
-- Definition for index descuentos_pk (OID = 16923) :
--
CREATE UNIQUE INDEX descuentos_pk ON descuentos USING btree (id);
--
-- Definition for index detalle_nota_venta_pk (OID = 16924) :
--
CREATE UNIQUE INDEX detalle_nota_venta_pk ON detalle_nota_ventas USING btree (id);
--
-- Definition for index dosificaciones_pk (OID = 16925) :
--
CREATE UNIQUE INDEX dosificaciones_pk ON dosificaciones USING btree (id);
--
-- Definition for index empleados_pk (OID = 16926) :
--
CREATE UNIQUE INDEX empleados_pk ON empleados USING btree (id);
--
-- Definition for index es_almacenado_fk (OID = 16927) :
--
CREATE INDEX es_almacenado_fk ON items USING btree (almacen_id);
--
-- Definition for index es_detallado_fk (OID = 16928) :
--
CREATE INDEX es_detallado_fk ON compras_items USING btree (compra_id);
--
-- Definition for index esta_en_una_factura_fk (OID = 16929) :
--
CREATE INDEX esta_en_una_factura_fk ON factura_items USING btree (item_id);
--
-- Definition for index factura_items_pk (OID = 16930) :
--
CREATE UNIQUE INDEX factura_items_pk ON factura_items USING btree (id);
--
-- Definition for index facturas_pk (OID = 16931) :
--
CREATE UNIQUE INDEX facturas_pk ON facturas USING btree (dosificacion_id, id);
--
-- Definition for index grupos_pk (OID = 16932) :
--
CREATE UNIQUE INDEX grupos_pk ON grupos USING btree (id);
--
-- Definition for index industrias_pk (OID = 16933) :
--
CREATE UNIQUE INDEX industrias_pk ON industrias USING btree (id);
--
-- Definition for index items_pk (OID = 16934) :
--
CREATE UNIQUE INDEX items_pk ON items USING btree (id);
--
-- Definition for index marcas_pk (OID = 16935) :
--
CREATE UNIQUE INDEX marcas_pk ON marcas USING btree (id);
--
-- Definition for index nota_de_venta_pk (OID = 16936) :
--
CREATE UNIQUE INDEX nota_de_venta_pk ON nota_de_ventas USING btree (id);
--
-- Definition for index pertenece_a_un_grupo_fk (OID = 16937) :
--
CREATE INDEX pertenece_a_un_grupo_fk ON items USING btree (grupo_id);
--
-- Definition for index piezas_pk (OID = 16938) :
--
CREATE UNIQUE INDEX piezas_pk ON piezas USING btree (id);
--
-- Definition for index plan_pagos_pk (OID = 16939) :
--
CREATE UNIQUE INDEX plan_pagos_pk ON plan_pagos USING btree (id);
--
-- Definition for index proveedores_pk (OID = 16940) :
--
CREATE UNIQUE INDEX proveedores_pk ON proveedores USING btree (id);
--
-- Definition for index realiza_una_venta_fk (OID = 16941) :
--
CREATE INDEX realiza_una_venta_fk ON ventas USING btree (empleado_id);
--
-- Definition for index registra_una_compra_fk (OID = 16942) :
--
CREATE INDEX registra_una_compra_fk ON compras USING btree (empleado_id);
--
-- Definition for index roles_pk (OID = 16943) :
--
CREATE UNIQUE INDEX roles_pk ON roles USING btree (id);
--
-- Definition for index tiene_detalle_de_venta_fk (OID = 16944) :
--
CREATE INDEX tiene_detalle_de_venta_fk ON detalle_nota_ventas USING btree (nota_de_venta_id);
--
-- Definition for index tiene_detalle_nota_fk (OID = 16946) :
--
CREATE INDEX tiene_detalle_nota_fk ON detalle_nota_ventas USING btree (item_id);
--
-- Definition for index tiene_dosificacion_fk (OID = 16947) :
--
CREATE INDEX tiene_dosificacion_fk ON facturas USING btree (dosificacion_id);
--
-- Definition for index tiene_factura_fk (OID = 16948) :
--
CREATE INDEX tiene_factura_fk ON facturas USING btree (venta_id);
--
-- Definition for index tiene_industria_fk (OID = 16949) :
--
CREATE INDEX tiene_industria_fk ON items USING btree (industria_id);
--
-- Definition for index tiene_marca_fk (OID = 16950) :
--
CREATE INDEX tiene_marca_fk ON items USING btree (marca_id);
--
-- Definition for index tiene_nota_de_venta_fk (OID = 16951) :
--
CREATE INDEX tiene_nota_de_venta_fk ON nota_de_ventas USING btree (venta_id);
--
-- Definition for index tiene_piezas_fk (OID = 16952) :
--
CREATE INDEX tiene_piezas_fk ON piezas USING btree (articulo_id);
--
-- Definition for index tiene_plan_de_pago_fk (OID = 16953) :
--
CREATE INDEX tiene_plan_de_pago_fk ON plan_pagos USING btree (credito_id);
--
-- Definition for index tiene_proveedor_fk (OID = 16954) :
--
CREATE INDEX tiene_proveedor_fk ON compras USING btree (proveedor_id);
--
-- Definition for index tiene_rol_fk (OID = 16955) :
--
CREATE INDEX tiene_rol_fk ON cuentas USING btree (rol_id);
--
-- Definition for index tiene_subgrupos_fk (OID = 16956) :
--
CREATE INDEX tiene_subgrupos_fk ON grupos USING btree (grupo_id);
--
-- Definition for index venta__a_credito_fk (OID = 16957) :
--
CREATE INDEX venta__a_credito_fk ON creditos USING btree (venta_id);
--
-- Definition for index venta_a_cliente_fk (OID = 16958) :
--
CREATE INDEX venta_a_cliente_fk ON ventas USING btree (cliente_id);
--
-- Definition for index venta_con_descuento_fk (OID = 16959) :
--
CREATE INDEX venta_con_descuento_fk ON ventas USING btree (descuento_id);
--
-- Definition for index venta_pk (OID = 16960) :
--
CREATE UNIQUE INDEX venta_pk ON ventas USING btree (id);
--
-- Definition for index facturas_id_key (OID = 24956) :
--
CREATE UNIQUE INDEX facturas_id_key ON facturas USING btree (id);
--
-- Definition for index pk_almacenes (OID = 16961) :
--
ALTER TABLE ONLY almacenes
    ADD CONSTRAINT pk_almacenes
    PRIMARY KEY (id);
--
-- Definition for index pk_clientes (OID = 16963) :
--
ALTER TABLE ONLY clientes
    ADD CONSTRAINT pk_clientes
    PRIMARY KEY (id);
--
-- Definition for index pk_compras (OID = 16965) :
--
ALTER TABLE ONLY compras
    ADD CONSTRAINT pk_compras
    PRIMARY KEY (id);
--
-- Definition for index pk_compras_items (OID = 16967) :
--
ALTER TABLE ONLY compras_items
    ADD CONSTRAINT pk_compras_items
    PRIMARY KEY (id);
--
-- Definition for index pk_creditos (OID = 16969) :
--
ALTER TABLE ONLY creditos
    ADD CONSTRAINT pk_creditos
    PRIMARY KEY (id);
--
-- Definition for index pk_cuentas (OID = 16971) :
--
ALTER TABLE ONLY cuentas
    ADD CONSTRAINT pk_cuentas
    PRIMARY KEY (id);
--
-- Definition for index pk_cuotas (OID = 16973) :
--
ALTER TABLE ONLY cuotas
    ADD CONSTRAINT pk_cuotas
    PRIMARY KEY (id);
--
-- Definition for index pk_descuentos (OID = 16975) :
--
ALTER TABLE ONLY descuentos
    ADD CONSTRAINT pk_descuentos
    PRIMARY KEY (id);
--
-- Definition for index pk_detalle_nota_venta (OID = 16977) :
--
ALTER TABLE ONLY detalle_nota_ventas
    ADD CONSTRAINT pk_detalle_nota_venta
    PRIMARY KEY (id);
--
-- Definition for index pk_dosificaciones (OID = 16979) :
--
ALTER TABLE ONLY dosificaciones
    ADD CONSTRAINT pk_dosificaciones
    PRIMARY KEY (id);
--
-- Definition for index pk_empleados (OID = 16981) :
--
ALTER TABLE ONLY empleados
    ADD CONSTRAINT pk_empleados
    PRIMARY KEY (id);
--
-- Definition for index pk_factura_items (OID = 16983) :
--
ALTER TABLE ONLY factura_items
    ADD CONSTRAINT pk_factura_items
    PRIMARY KEY (id);
--
-- Definition for index pk_facturas (OID = 16985) :
--
ALTER TABLE ONLY facturas
    ADD CONSTRAINT pk_facturas
    PRIMARY KEY (dosificacion_id, id);
--
-- Definition for index pk_grupos (OID = 16987) :
--
ALTER TABLE ONLY grupos
    ADD CONSTRAINT pk_grupos
    PRIMARY KEY (id);
--
-- Definition for index pk_industrias (OID = 16989) :
--
ALTER TABLE ONLY industrias
    ADD CONSTRAINT pk_industrias
    PRIMARY KEY (id);
--
-- Definition for index pk_items (OID = 16991) :
--
ALTER TABLE ONLY items
    ADD CONSTRAINT pk_items
    PRIMARY KEY (id);
--
-- Definition for index pk_marcas (OID = 16993) :
--
ALTER TABLE ONLY marcas
    ADD CONSTRAINT pk_marcas
    PRIMARY KEY (id);
--
-- Definition for index pk_nota_de_venta (OID = 16995) :
--
ALTER TABLE ONLY nota_de_ventas
    ADD CONSTRAINT pk_nota_de_venta
    PRIMARY KEY (id);
--
-- Definition for index pk_piezas (OID = 16997) :
--
ALTER TABLE ONLY piezas
    ADD CONSTRAINT pk_piezas
    PRIMARY KEY (id);
--
-- Definition for index pk_plan_pagos (OID = 16999) :
--
ALTER TABLE ONLY plan_pagos
    ADD CONSTRAINT pk_plan_pagos
    PRIMARY KEY (id);
--
-- Definition for index pk_proveedores (OID = 17001) :
--
ALTER TABLE ONLY proveedores
    ADD CONSTRAINT pk_proveedores
    PRIMARY KEY (id);
--
-- Definition for index pk_roles (OID = 17003) :
--
ALTER TABLE ONLY roles
    ADD CONSTRAINT pk_roles
    PRIMARY KEY (id);
--
-- Definition for index pk_venta (OID = 17005) :
--
ALTER TABLE ONLY ventas
    ADD CONSTRAINT pk_venta
    PRIMARY KEY (id);
--
-- Definition for index fk_compras__articulo__items (OID = 17007) :
--
ALTER TABLE ONLY compras_items
    ADD CONSTRAINT fk_compras__articulo__items
    FOREIGN KEY (item_id) REFERENCES items(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_compras__es_detall_compras (OID = 17012) :
--
ALTER TABLE ONLY compras_items
    ADD CONSTRAINT fk_compras__es_detall_compras
    FOREIGN KEY (compra_id) REFERENCES compras(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_compras_compra_a__creditos (OID = 17017) :
--
ALTER TABLE ONLY compras
    ADD CONSTRAINT fk_compras_compra_a__creditos
    FOREIGN KEY (credito_id) REFERENCES creditos(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_compras_registra__empleado (OID = 17022) :
--
ALTER TABLE ONLY compras
    ADD CONSTRAINT fk_compras_registra__empleado
    FOREIGN KEY (empleado_id) REFERENCES empleados(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_compras_tiene_pro_proveedo (OID = 17027) :
--
ALTER TABLE ONLY compras
    ADD CONSTRAINT fk_compras_tiene_pro_proveedo
    FOREIGN KEY (proveedor_id) REFERENCES proveedores(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_creditos_venta__a__venta (OID = 17032) :
--
ALTER TABLE ONLY creditos
    ADD CONSTRAINT fk_creditos_venta__a__venta
    FOREIGN KEY (venta_id) REFERENCES ventas(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_cuentas_cuenta_de_empleado (OID = 17037) :
--
ALTER TABLE ONLY cuentas
    ADD CONSTRAINT fk_cuentas_cuenta_de_empleado
    FOREIGN KEY (empleado_id) REFERENCES empleados(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_cuentas_tiene_rol_roles (OID = 17042) :
--
ALTER TABLE ONLY cuentas
    ADD CONSTRAINT fk_cuentas_tiene_rol_roles
    FOREIGN KEY (rol_id) REFERENCES roles(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_cuotas_cuotas_pa_plan_pag (OID = 17047) :
--
ALTER TABLE ONLY cuotas
    ADD CONSTRAINT fk_cuotas_cuotas_pa_plan_pag
    FOREIGN KEY (plan_pago_id) REFERENCES plan_pagos(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_detalle__tiene_det_items (OID = 17052) :
--
ALTER TABLE ONLY detalle_nota_ventas
    ADD CONSTRAINT fk_detalle__tiene_det_items
    FOREIGN KEY (item_id) REFERENCES items(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_detalle__tiene_det_nota_de_ (OID = 17057) :
--
ALTER TABLE ONLY detalle_nota_ventas
    ADD CONSTRAINT fk_detalle__tiene_det_nota_de_
    FOREIGN KEY (nota_de_venta_id) REFERENCES nota_de_ventas(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_factura__esta_en_u_items (OID = 17062) :
--
ALTER TABLE ONLY factura_items
    ADD CONSTRAINT fk_factura__esta_en_u_items
    FOREIGN KEY (item_id) REFERENCES items(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_facturas_tiene_dos_dosifica (OID = 17072) :
--
ALTER TABLE ONLY facturas
    ADD CONSTRAINT fk_facturas_tiene_dos_dosifica
    FOREIGN KEY (dosificacion_id) REFERENCES dosificaciones(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_facturas_tiene_fac_venta (OID = 17077) :
--
ALTER TABLE ONLY facturas
    ADD CONSTRAINT fk_facturas_tiene_fac_venta
    FOREIGN KEY (venta_id) REFERENCES ventas(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_grupos_tiene_sub_grupos (OID = 17082) :
--
ALTER TABLE ONLY grupos
    ADD CONSTRAINT fk_grupos_tiene_sub_grupos
    FOREIGN KEY (grupo_id) REFERENCES grupos(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_items_es_almace_almacene (OID = 17087) :
--
ALTER TABLE ONLY items
    ADD CONSTRAINT fk_items_es_almace_almacene
    FOREIGN KEY (almacen_id) REFERENCES almacenes(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_items_pertenece_grupos (OID = 17092) :
--
ALTER TABLE ONLY items
    ADD CONSTRAINT fk_items_pertenece_grupos
    FOREIGN KEY (grupo_id) REFERENCES grupos(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_items_tiene_ind_industri (OID = 17097) :
--
ALTER TABLE ONLY items
    ADD CONSTRAINT fk_items_tiene_ind_industri
    FOREIGN KEY (industria_id) REFERENCES industrias(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_items_tiene_mar_marcas (OID = 17102) :
--
ALTER TABLE ONLY items
    ADD CONSTRAINT fk_items_tiene_mar_marcas
    FOREIGN KEY (marca_id) REFERENCES marcas(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_nota_de__tiene_not_venta (OID = 17107) :
--
ALTER TABLE ONLY nota_de_ventas
    ADD CONSTRAINT fk_nota_de__tiene_not_venta
    FOREIGN KEY (venta_id) REFERENCES ventas(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_piezas_tiene_pie_items (OID = 17112) :
--
ALTER TABLE ONLY piezas
    ADD CONSTRAINT fk_piezas_tiene_pie_items
    FOREIGN KEY (articulo_id) REFERENCES items(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_plan_pag_tiene_pla_creditos (OID = 17117) :
--
ALTER TABLE ONLY plan_pagos
    ADD CONSTRAINT fk_plan_pag_tiene_pla_creditos
    FOREIGN KEY (credito_id) REFERENCES creditos(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_venta_realiza_u_empleado (OID = 17122) :
--
ALTER TABLE ONLY ventas
    ADD CONSTRAINT fk_venta_realiza_u_empleado
    FOREIGN KEY (empleado_id) REFERENCES empleados(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_venta_venta_a_c_clientes (OID = 17127) :
--
ALTER TABLE ONLY ventas
    ADD CONSTRAINT fk_venta_venta_a_c_clientes
    FOREIGN KEY (cliente_id) REFERENCES clientes(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_venta_venta_con_descuent (OID = 17132) :
--
ALTER TABLE ONLY ventas
    ADD CONSTRAINT fk_venta_venta_con_descuent
    FOREIGN KEY (descuento_id) REFERENCES descuentos(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
--
-- Definition for index fk_tiene_detalle_factura (OID = 24957) :
--
ALTER TABLE ONLY factura_items
    ADD CONSTRAINT fk_tiene_detalle_factura
    FOREIGN KEY (factura_id) REFERENCES facturas(id);
--
-- Data for sequence public.almacenes_id_seq (OID = 16771)
--
SELECT pg_catalog.setval('almacenes_id_seq', 1, false);
--
-- Data for sequence public.clientes_id_seq (OID = 16780)
--
SELECT pg_catalog.setval('clientes_id_seq', 1, false);
--
-- Data for sequence public.compras_id_seq (OID = 16786)
--
SELECT pg_catalog.setval('compras_id_seq', 1, false);
--
-- Data for sequence public.compras_items_identificador_compra_seq (OID = 16792)
--
SELECT pg_catalog.setval('compras_items_identificador_compra_seq', 1, false);
--
-- Data for sequence public.creditos_id_seq (OID = 16798)
--
SELECT pg_catalog.setval('creditos_id_seq', 1, false);
--
-- Data for sequence public.cuentas_id_seq (OID = 16804)
--
SELECT pg_catalog.setval('cuentas_id_seq', 1, false);
--
-- Data for sequence public.cuotas_id_seq (OID = 16810)
--
SELECT pg_catalog.setval('cuotas_id_seq', 1, false);
--
-- Data for sequence public.descuentos_id_seq (OID = 16816)
--
SELECT pg_catalog.setval('descuentos_id_seq', 1, false);
--
-- Data for sequence public.detalle_nota_venta_registro_seq (OID = 16822)
--
SELECT pg_catalog.setval('detalle_nota_venta_registro_seq', 1, false);
--
-- Data for sequence public.dosificaciones_id_seq (OID = 16828)
--
SELECT pg_catalog.setval('dosificaciones_id_seq', 1, false);
--
-- Data for sequence public.empleados_id_seq (OID = 16834)
--
SELECT pg_catalog.setval('empleados_id_seq', 1, false);
--
-- Data for sequence public.factura_items_identificador_venta_seq (OID = 16840)
--
SELECT pg_catalog.setval('factura_items_identificador_venta_seq', 1, false);
--
-- Data for sequence public.facturas_id_seq (OID = 16846)
--
SELECT pg_catalog.setval('facturas_id_seq', 1, false);
--
-- Data for sequence public.grupos_id_seq (OID = 16852)
--
SELECT pg_catalog.setval('grupos_id_seq', 6, true);
--
-- Data for sequence public.industrias_id_seq (OID = 16858)
--
SELECT pg_catalog.setval('industrias_id_seq', 1, false);
--
-- Data for sequence public.items_id_articulo_seq (OID = 16864)
--
SELECT pg_catalog.setval('items_id_articulo_seq', 1, false);
--
-- Data for sequence public.marcas_id_seq (OID = 16870)
--
SELECT pg_catalog.setval('marcas_id_seq', 1, false);
--
-- Data for sequence public.piezas_id_seq (OID = 16879)
--
SELECT pg_catalog.setval('piezas_id_seq', 1, false);
--
-- Data for sequence public.plan_pagos_id_plan_de_pago_seq (OID = 16885)
--
SELECT pg_catalog.setval('plan_pagos_id_plan_de_pago_seq', 1, false);
--
-- Data for sequence public.proveedores_id_seq (OID = 16891)
--
SELECT pg_catalog.setval('proveedores_id_seq', 1, false);
--
-- Data for sequence public.roles_id_seq (OID = 16900)
--
SELECT pg_catalog.setval('roles_id_seq', 2, true);
--
-- Data for sequence public.venta_id_seq (OID = 16906)
--
SELECT pg_catalog.setval('venta_id_seq', 1, false);
--
-- Comments
--
COMMENT ON SCHEMA public IS 'standard public schema';
