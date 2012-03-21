/*==============================================================*/
/* DBMS name:      PostgreSQL 8                                 */
/* Created on:     3/20/2012 5:25:07 PM                         */
/*==============================================================*/


drop index almacenes_pk;

drop table almacenes;

drop index clientes_pk;

drop table clientes;

drop index registra_una_compra_fk;

drop index compra_a_credito_fk;

drop index tiene_proveedor_fk;

drop index compras_pk;

drop table compras;

drop index es_detallado_fk;

drop index articulo_comprado_fk;

drop index compras_items_pk;

drop table compras_items;

drop index venta__a_credito_fk;

drop index creditos_pk;

drop table creditos;

drop index cuenta_de_usuario_fk;

drop index tiene_rol_fk;

drop index cuentas_pk;

drop table cuentas;

drop index cuotas_pagadas_fk;

drop index cuotas_pk;

drop table cuotas;

drop index descuentos_pk;

drop table descuentos;

drop index tiene_detalle_de_venta_fk;

drop index tiene_detalle_nota_fk;

drop index detalle_nota_venta_pk;

drop table detalle_nota_venta;

drop index dosificaciones_pk;

drop table dosificaciones;

drop index empleados_pk;

drop table empleados;

drop index tiene_dosificacion_fk;

drop index tiene_factura_fk;

drop index facturas_pk;

drop table facturas;

drop index esta_en_una_factura_fk;

drop index tiene_detalle_fk;

drop index factura_items_pk;

drop table factura_items;

drop index tiene_subgrupos_fk;

drop index grupos_pk;

drop table grupos;

drop index industrias_pk;

drop table industrias;

drop index tiene_industria_fk;

drop index tiene_marca_fk;

drop index es_almacenado_fk;

drop index pertenece_a_un_grupo_fk;

drop index items_pk;

drop table items;

drop index marcas_pk;

drop table marcas;

drop index tiene_nota_de_venta_fk;

drop index nota_de_venta_pk;

drop table nota_de_venta;

drop index tiene_piezas_fk;

drop index piezas_pk;

drop table piezas;

drop index tiene_plan_de_pago_fk;

drop index plan_pagos_pk;

drop table plan_pagos;

drop index proveedores_pk;

drop table proveedores;

drop index roles_pk;

drop table roles;

drop index realiza_una_venta_fk;

drop index venta_a_cliente_fk;

drop index venta_con_descuento_fk;

drop index venta_pk;

drop table venta;

/*==============================================================*/
/* Table: almacenes                                             */
/*==============================================================*/
create table almacenes (
   id_almacen           serial               not null,
   nombre_almacen       varchar(50)          null,
   descripcion_almacen  varchar(255)         null,
   direccion_almacen    varchar(255)         null,
   constraint pk_almacenes primary key (id_almacen)
);

/*==============================================================*/
/* Index: almacenes_pk                                          */
/*==============================================================*/
create unique index almacenes_pk on almacenes (
id_almacen
);

/*==============================================================*/
/* Table: clientes                                              */
/*==============================================================*/
create table clientes (
   id_cliente           serial               not null,
   nit_ci               varchar(10)          null,
   nombres              varchar(30)          null,
   apellido_paterno     varchar(50)          null,
   apellido_materno     varchar(50)          null,
   telefono             int4                 null,
   email                varchar(50)          null,
   constraint pk_clientes primary key (id_cliente)
);

/*==============================================================*/
/* Index: clientes_pk                                           */
/*==============================================================*/
create unique index clientes_pk on clientes (
id_cliente
);

/*==============================================================*/
/* Table: compras                                               */
/*==============================================================*/
create table compras (
   id_compra            serial               not null,
   id_credito           int4                 null,
   identificador        int4                 not null,
   id_proveedor         int4                 not null,
   fecha_compra         date                 null,
   monto_total          int4                 null,
   constraint pk_compras primary key (id_compra)
);

/*==============================================================*/
/* Index: compras_pk                                            */
/*==============================================================*/
create unique index compras_pk on compras (
id_compra
);

/*==============================================================*/
/* Index: tiene_proveedor_fk                                    */
/*==============================================================*/
create  index tiene_proveedor_fk on compras (
id_proveedor
);

/*==============================================================*/
/* Index: compra_a_credito_fk                                   */
/*==============================================================*/
create  index compra_a_credito_fk on compras (
id_credito
);

/*==============================================================*/
/* Index: registra_una_compra_fk                                */
/*==============================================================*/
create  index registra_una_compra_fk on compras (
identificador
);

/*==============================================================*/
/* Table: compras_items                                         */
/*==============================================================*/
create table compras_items (
   identificador_compra serial               not null,
   id_articulo          int4                 not null,
   id_compra            int4                 not null,
   precio_de_compra     decimal(10,2)        null,
   recio_referencial_de_vewnta decimal(10,2)        null,
   garantia             int4                 null,
   constraint pk_compras_items primary key (identificador_compra)
);

/*==============================================================*/
/* Index: compras_items_pk                                      */
/*==============================================================*/
create unique index compras_items_pk on compras_items (
identificador_compra
);

/*==============================================================*/
/* Index: articulo_comprado_fk                                  */
/*==============================================================*/
create  index articulo_comprado_fk on compras_items (
id_articulo
);

/*==============================================================*/
/* Index: es_detallado_fk                                       */
/*==============================================================*/
create  index es_detallado_fk on compras_items (
id_compra
);

/*==============================================================*/
/* Table: creditos                                              */
/*==============================================================*/
create table creditos (
   id_credito           serial               not null,
   id_venta             int4                 not null,
   cuota_inicial        decimal(10,2)        null,
   constraint pk_creditos primary key (id_credito)
);

/*==============================================================*/
/* Index: creditos_pk                                           */
/*==============================================================*/
create unique index creditos_pk on creditos (
id_credito
);

/*==============================================================*/
/* Index: venta__a_credito_fk                                   */
/*==============================================================*/
create  index venta__a_credito_fk on creditos (
id_venta
);

/*==============================================================*/
/* Table: cuentas                                               */
/*==============================================================*/
create table cuentas (
   id_cuenta            serial               not null,
   identificador        int4                 not null,
   id_rol               int4                 not null,
   nombre_usuario       varchar(15)          null,
   password             char(32)             null,
   fecha_inicio_valides date                 null,
   fecha_final_valides  date                 null,
   constraint pk_cuentas primary key (id_cuenta)
);

/*==============================================================*/
/* Index: cuentas_pk                                            */
/*==============================================================*/
create unique index cuentas_pk on cuentas (
id_cuenta
);

/*==============================================================*/
/* Index: tiene_rol_fk                                          */
/*==============================================================*/
create  index tiene_rol_fk on cuentas (
id_rol
);

/*==============================================================*/
/* Index: cuenta_de_usuario_fk                                  */
/*==============================================================*/
create  index cuenta_de_usuario_fk on cuentas (
identificador
);

/*==============================================================*/
/* Table: cuotas                                                */
/*==============================================================*/
create table cuotas (
   id_cuota             serial               not null,
   id_plan_de_pago      int4                 not null,
   monto_capital        decimal(4,2)         null,
   monto_interes        decimal(4,2)         null,
   numero_cuota         int4                 null,
   fecha_pago           date                 null,
   constraint pk_cuotas primary key (id_cuota)
);

/*==============================================================*/
/* Index: cuotas_pk                                             */
/*==============================================================*/
create unique index cuotas_pk on cuotas (
id_cuota
);

/*==============================================================*/
/* Index: cuotas_pagadas_fk                                     */
/*==============================================================*/
create  index cuotas_pagadas_fk on cuotas (
id_plan_de_pago
);

/*==============================================================*/
/* Table: descuentos                                            */
/*==============================================================*/
create table descuentos (
   id_descuento         serial               not null,
   nombre_descuento     varchar(50)          null,
   fecha_incicio_descuento date                 null,
   fecha_fin_descuento  date                 null,
   cuota_inicial        decimal(10,2)        null,
   tipo                 varchar(10)          null,
   descripcion_descuento varchar(255)         null,
   constraint pk_descuentos primary key (id_descuento)
);

/*==============================================================*/
/* Index: descuentos_pk                                         */
/*==============================================================*/
create unique index descuentos_pk on descuentos (
id_descuento
);

/*==============================================================*/
/* Table: detalle_nota_venta                                    */
/*==============================================================*/
create table detalle_nota_venta (
   registro             serial               not null,
   id_articulo          int4                 not null,
   id_nota              int4                 null,
   cantidad             int4                 null,
   precio_venta         decimal(10,2)        null,
   constraint pk_detalle_nota_venta primary key (registro)
);

/*==============================================================*/
/* Index: detalle_nota_venta_pk                                 */
/*==============================================================*/
create unique index detalle_nota_venta_pk on detalle_nota_venta (
registro
);

/*==============================================================*/
/* Index: tiene_detalle_nota_fk                                 */
/*==============================================================*/
create  index tiene_detalle_nota_fk on detalle_nota_venta (
id_articulo
);

/*==============================================================*/
/* Index: tiene_detalle_de_venta_fk                             */
/*==============================================================*/
create  index tiene_detalle_de_venta_fk on detalle_nota_venta (
id_nota
);

/*==============================================================*/
/* Table: dosificaciones                                        */
/*==============================================================*/
create table dosificaciones (
   id_dosificacion      serial               not null,
   codigo_dosificacion  char(20)             null,
   fecha_inicio_emicion date                 null,
   fecha_limite_emision date                 null,
   numero_de_autorizacion int4                 null,
   numero_de_factura    int4                 null,
   constraint pk_dosificaciones primary key (id_dosificacion)
);

/*==============================================================*/
/* Index: dosificaciones_pk                                     */
/*==============================================================*/
create unique index dosificaciones_pk on dosificaciones (
id_dosificacion
);

/*==============================================================*/
/* Table: empleados                                             */
/*==============================================================*/
create table empleados (
   identificador        serial               not null,
   doc_identidad        varchar(20)          null,
   nombres              varchar(30)          null,
   apellido_paterno     varchar(50)          null,
   apellido_materno     varchar(50)          null,
   fecha_ingreso        date                 null,
   contacto             varchar(255)         null,
   telefono             int4                 null,
   email                varchar(50)          null,
   tipo_doc_identidad   char(20)             null,
   constraint pk_empleados primary key (identificador)
);

/*==============================================================*/
/* Index: empleados_pk                                          */
/*==============================================================*/
create unique index empleados_pk on empleados (
identificador
);

/*==============================================================*/
/* Table: facturas                                              */
/*==============================================================*/
create table facturas (
   id_dosificacion      int4                 not null,
   id_factura           serial               not null,
   id_venta             int4                 not null,
   fecha_factura        date                 null,
   monto_total          int4                 null,
   constraint pk_facturas primary key (id_dosificacion, id_factura)
);

/*==============================================================*/
/* Index: facturas_pk                                           */
/*==============================================================*/
create unique index facturas_pk on facturas (
id_dosificacion,
id_factura
);

/*==============================================================*/
/* Index: tiene_factura_fk                                      */
/*==============================================================*/
create  index tiene_factura_fk on facturas (
id_venta
);

/*==============================================================*/
/* Index: tiene_dosificacion_fk                                 */
/*==============================================================*/
create  index tiene_dosificacion_fk on facturas (
id_dosificacion
);

/*==============================================================*/
/* Table: factura_items                                         */
/*==============================================================*/
create table factura_items (
   identificador_venta  serial               not null,
   id_articulo          int4                 not null,
   id_dosificacion      int4                 not null,
   id_factura           int4                 not null,
   cantidad             int4                 null,
   precio_venta         decimal(10,2)        null,
   constraint pk_factura_items primary key (identificador_venta)
);

/*==============================================================*/
/* Index: factura_items_pk                                      */
/*==============================================================*/
create unique index factura_items_pk on factura_items (
identificador_venta
);

/*==============================================================*/
/* Index: tiene_detalle_fk                                      */
/*==============================================================*/
create  index tiene_detalle_fk on factura_items (
id_dosificacion,
id_factura
);

/*==============================================================*/
/* Index: esta_en_una_factura_fk                                */
/*==============================================================*/
create  index esta_en_una_factura_fk on factura_items (
id_articulo
);

/*==============================================================*/
/* Table: grupos                                                */
/*==============================================================*/
create table grupos (
   id_grupo             serial               not null,
   gru_id_grupo         int4                 null,
   nombre_grupo         varchar(50)          null,
   descripcion_grupo    varchar(255)         null,
   constraint pk_grupos primary key (id_grupo)
);

/*==============================================================*/
/* Index: grupos_pk                                             */
/*==============================================================*/
create unique index grupos_pk on grupos (
id_grupo
);

/*==============================================================*/
/* Index: tiene_subgrupos_fk                                    */
/*==============================================================*/
create  index tiene_subgrupos_fk on grupos (
gru_id_grupo
);

/*==============================================================*/
/* Table: industrias                                            */
/*==============================================================*/
create table industrias (
   id_industria         serial               not null,
   nombre_industria     varchar(100)         null,
   descripcion_industria varchar(255)         null,
   constraint pk_industrias primary key (id_industria)
);

/*==============================================================*/
/* Index: industrias_pk                                         */
/*==============================================================*/
create unique index industrias_pk on industrias (
id_industria
);

/*==============================================================*/
/* Table: items                                                 */
/*==============================================================*/
create table items (
   id_articulo          serial               not null,
   id_marca             int4                 not null,
   id_grupo             int4                 not null,
   id_industria         int4                 not null,
   id_almacen           int4                 not null,
   nombre_articulo      varchar(100)         null,
   descripcion          varchar(255)         null,
   numero_de_serie      varchar(100)         null,
   codigo               varchar(10)          null,
   constraint pk_items primary key (id_articulo)
);

/*==============================================================*/
/* Index: items_pk                                              */
/*==============================================================*/
create unique index items_pk on items (
id_articulo
);

/*==============================================================*/
/* Index: pertenece_a_un_grupo_fk                               */
/*==============================================================*/
create  index pertenece_a_un_grupo_fk on items (
id_grupo
);

/*==============================================================*/
/* Index: es_almacenado_fk                                      */
/*==============================================================*/
create  index es_almacenado_fk on items (
id_almacen
);

/*==============================================================*/
/* Index: tiene_marca_fk                                        */
/*==============================================================*/
create  index tiene_marca_fk on items (
id_marca
);

/*==============================================================*/
/* Index: tiene_industria_fk                                    */
/*==============================================================*/
create  index tiene_industria_fk on items (
id_industria
);

/*==============================================================*/
/* Table: marcas                                                */
/*==============================================================*/
create table marcas (
   id_marca             serial               not null,
   nombre_marca         varchar(50)          null,
   descripcion_marca    varchar(255)         null,
   constraint pk_marcas primary key (id_marca)
);

/*==============================================================*/
/* Index: marcas_pk                                             */
/*==============================================================*/
create unique index marcas_pk on marcas (
id_marca
);

/*==============================================================*/
/* Table: nota_de_venta                                         */
/*==============================================================*/
create table nota_de_venta (
   id_nota              int4                 not null,
   id_venta             int4                 not null,
   fecha_nota_venta     date                 null,
   monto_total          int4                 null,
   constraint pk_nota_de_venta primary key (id_nota)
);

/*==============================================================*/
/* Index: nota_de_venta_pk                                      */
/*==============================================================*/
create unique index nota_de_venta_pk on nota_de_venta (
id_nota
);

/*==============================================================*/
/* Index: tiene_nota_de_venta_fk                                */
/*==============================================================*/
create  index tiene_nota_de_venta_fk on nota_de_venta (
id_venta
);

/*==============================================================*/
/* Table: piezas                                                */
/*==============================================================*/
create table piezas (
   id_pieza             serial               not null,
   id_articulo          int4                 not null,
   nombre_pieza         varchar(50)          null,
   numero_de_serie      varchar(100)         null,
   descripcion_pieza    varchar(255)         null,
   constraint pk_piezas primary key (id_pieza)
);

/*==============================================================*/
/* Index: piezas_pk                                             */
/*==============================================================*/
create unique index piezas_pk on piezas (
id_pieza
);

/*==============================================================*/
/* Index: tiene_piezas_fk                                       */
/*==============================================================*/
create  index tiene_piezas_fk on piezas (
id_articulo
);

/*==============================================================*/
/* Table: plan_pagos                                            */
/*==============================================================*/
create table plan_pagos (
   id_plan_de_pago      serial               not null,
   id_credito           int4                 not null,
   fecha_inicio_pagos   date                 null,
   numero_de_cuotas     int4                 null,
   tipo                 varchar(10)          null,
   interes              decimal(4,2)         null,
   numero_de_dias       int4                 null,
   tolerancia           int4                 null,
   constraint pk_plan_pagos primary key (id_plan_de_pago)
);

/*==============================================================*/
/* Index: plan_pagos_pk                                         */
/*==============================================================*/
create unique index plan_pagos_pk on plan_pagos (
id_plan_de_pago
);

/*==============================================================*/
/* Index: tiene_plan_de_pago_fk                                 */
/*==============================================================*/
create  index tiene_plan_de_pago_fk on plan_pagos (
id_credito
);

/*==============================================================*/
/* Table: proveedores                                           */
/*==============================================================*/
create table proveedores (
   id_proveedor         serial               not null,
   nombre_proveedor     varchar(100)         null,
   direccion_proveedor  varchar(255)         null,
   telefono             int4                 null,
   contacto             varchar(255)         null,
   email                varchar(50)          null,
   email_contacto       varchar(100)         null,
   constraint pk_proveedores primary key (id_proveedor)
);

/*==============================================================*/
/* Index: proveedores_pk                                        */
/*==============================================================*/
create unique index proveedores_pk on proveedores (
id_proveedor
);

/*==============================================================*/
/* Table: roles                                                 */
/*==============================================================*/
create table roles (
   id_rol               serial               not null,
   nombre_rol           varchar(20)          null,
   descripcion          varchar(255)         null,
   constraint pk_roles primary key (id_rol)
);

/*==============================================================*/
/* Index: roles_pk                                              */
/*==============================================================*/
create unique index roles_pk on roles (
id_rol
);

/*==============================================================*/
/* Table: venta                                                 */
/*==============================================================*/
create table venta (
   id_venta             serial               not null,
   id_cliente           int4                 not null,
   id_descuento         int4                 null,
   identificador        int4                 not null,
   fecha_venta          date                 null,
   pagado               bool                 null,
   constraint pk_venta primary key (id_venta)
);

/*==============================================================*/
/* Index: venta_pk                                              */
/*==============================================================*/
create unique index venta_pk on venta (
id_venta
);

/*==============================================================*/
/* Index: venta_con_descuento_fk                                */
/*==============================================================*/
create  index venta_con_descuento_fk on venta (
id_descuento
);

/*==============================================================*/
/* Index: venta_a_cliente_fk                                    */
/*==============================================================*/
create  index venta_a_cliente_fk on venta (
id_cliente
);

/*==============================================================*/
/* Index: realiza_una_venta_fk                                  */
/*==============================================================*/
create  index realiza_una_venta_fk on venta (
identificador
);

alter table compras
   add constraint fk_compras_compra_a__creditos foreign key (id_credito)
      references creditos (id_credito)
      on delete restrict on update restrict;

alter table compras
   add constraint fk_compras_registra__empleado foreign key (identificador)
      references empleados (identificador)
      on delete restrict on update restrict;

alter table compras
   add constraint fk_compras_tiene_pro_proveedo foreign key (id_proveedor)
      references proveedores (id_proveedor)
      on delete restrict on update restrict;

alter table compras_items
   add constraint fk_compras__articulo__items foreign key (id_articulo)
      references items (id_articulo)
      on delete restrict on update restrict;

alter table compras_items
   add constraint fk_compras__es_detall_compras foreign key (id_compra)
      references compras (id_compra)
      on delete restrict on update restrict;

alter table creditos
   add constraint fk_creditos_venta__a__venta foreign key (id_venta)
      references venta (id_venta)
      on delete restrict on update restrict;

alter table cuentas
   add constraint fk_cuentas_cuenta_de_empleado foreign key (identificador)
      references empleados (identificador)
      on delete restrict on update restrict;

alter table cuentas
   add constraint fk_cuentas_tiene_rol_roles foreign key (id_rol)
      references roles (id_rol)
      on delete restrict on update restrict;

alter table cuotas
   add constraint fk_cuotas_cuotas_pa_plan_pag foreign key (id_plan_de_pago)
      references plan_pagos (id_plan_de_pago)
      on delete restrict on update restrict;

alter table detalle_nota_venta
   add constraint fk_detalle__tiene_det_nota_de_ foreign key (id_nota)
      references nota_de_venta (id_nota)
      on delete restrict on update restrict;

alter table detalle_nota_venta
   add constraint fk_detalle__tiene_det_items foreign key (id_articulo)
      references items (id_articulo)
      on delete restrict on update restrict;

alter table facturas
   add constraint fk_facturas_tiene_dos_dosifica foreign key (id_dosificacion)
      references dosificaciones (id_dosificacion)
      on delete restrict on update restrict;

alter table facturas
   add constraint fk_facturas_tiene_fac_venta foreign key (id_venta)
      references venta (id_venta)
      on delete restrict on update restrict;

alter table factura_items
   add constraint fk_factura__esta_en_u_items foreign key (id_articulo)
      references items (id_articulo)
      on delete restrict on update restrict;

alter table factura_items
   add constraint fk_factura__tiene_det_facturas foreign key (id_dosificacion, id_factura)
      references facturas (id_dosificacion, id_factura)
      on delete restrict on update restrict;

alter table grupos
   add constraint fk_grupos_tiene_sub_grupos foreign key (gru_id_grupo)
      references grupos (id_grupo)
      on delete restrict on update restrict;

alter table items
   add constraint fk_items_es_almace_almacene foreign key (id_almacen)
      references almacenes (id_almacen)
      on delete restrict on update restrict;

alter table items
   add constraint fk_items_pertenece_grupos foreign key (id_grupo)
      references grupos (id_grupo)
      on delete restrict on update restrict;

alter table items
   add constraint fk_items_tiene_ind_industri foreign key (id_industria)
      references industrias (id_industria)
      on delete restrict on update restrict;

alter table items
   add constraint fk_items_tiene_mar_marcas foreign key (id_marca)
      references marcas (id_marca)
      on delete restrict on update restrict;

alter table nota_de_venta
   add constraint fk_nota_de__tiene_not_venta foreign key (id_venta)
      references venta (id_venta)
      on delete restrict on update restrict;

alter table piezas
   add constraint fk_piezas_tiene_pie_items foreign key (id_articulo)
      references items (id_articulo)
      on delete restrict on update restrict;

alter table plan_pagos
   add constraint fk_plan_pag_tiene_pla_creditos foreign key (id_credito)
      references creditos (id_credito)
      on delete restrict on update restrict;

alter table venta
   add constraint fk_venta_realiza_u_empleado foreign key (identificador)
      references empleados (identificador)
      on delete restrict on update restrict;

alter table venta
   add constraint fk_venta_venta_a_c_clientes foreign key (id_cliente)
      references clientes (id_cliente)
      on delete restrict on update restrict;

alter table venta
   add constraint fk_venta_venta_con_descuent foreign key (id_descuento)
      references descuentos (id_descuento)
      on delete restrict on update restrict;

