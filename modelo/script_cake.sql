/*==============================================================*/
/* DBMS name:      PostgreSQL 8                                 */
/* Created on:     16/03/2012 09:51:15 a.m.                     */
/*==============================================================*/

/*
drop index ALMACEN_PK;

drop table ALMACEN;

drop index CLIENTE_PK;

drop table CLIENTE;

drop index REGISTRA_UNA_COMPRA_FK;

drop index TIENE_PROVEEDOR_FK;

drop index COMPRA_PK;

drop table COMPRA;

drop index VENTA__A_CREDITO_FK;

drop index COMPRA_A_CREDITO_FK;

drop index CREDITO_PK;

drop table CREDITO;

drop index CUENTA_DE_USUARIO_FK;

drop index TIENE_ROL_FK;

drop index CUENTA_PK;

drop table CUENTA;

drop index CUOTAS_PAGADAS_FK;

drop index CUOTAS_PK;

drop table CUOTAS;

drop index DESCUENTO_PK;

drop table DESCUENTO;

drop index ARTICULO_COMPRADO_FK;

drop index COMPRAS_ITEMS_PK;

drop table COMPRAS_ITEMS;

drop index ESTA_EN_UNA_FACTURA_FK;

drop index TIENE_DETALLE_FK;

drop index FACTURAS_ITEMS_PK;

drop table FACTURAS_ITEMS;

drop index TIENE_DETALLE_DE_VENTA_FK;

drop index ITEMS_NOTA_DE_VENTAS_PK;

drop table ITEMS_NOTA_DE_VENTAS;

drop index DOSIFICACION_PK;

drop table DOSIFICACION;

drop index EMPLEADO_PK;

drop table EMPLEADO;

drop index TIENE_DOSIFICACION_FK;

drop index TIENE_FACTURA_FK;

drop index FACTURA_PK;

drop table FACTURA;

drop index TIENE_SUBGRUPOS_FK;

drop index GRUPO_PK;

drop table GRUPO;

drop index INDUSTRIA_PK;

drop table INDUSTRIA;

drop index TIENE_INDUSTRIA_FK;

drop index TIENE_MARCA_FK;

drop index ES_ALMACENADO_FK;

drop index PERTENECE_A_UN_GRUPO_FK;

drop index ITEM_PK;

drop table ITEM;

drop index MARCA_PK;

drop table MARCA;

drop index TIENE_NOTA_DE_VENTA_FK;

drop index NOTA_DE_VENTA_PK;

drop table NOTA_DE_VENTA;

drop index TIENE_PIEZAS_FK;

drop index PIEZA_PK;

drop table PIEZA;

drop index TIENE_PLAN_DE_PAGO_FK;

drop index PLAN_DE_PAGO_PK;

drop table PLAN_DE_PAGO;

drop index PROVEEDOR_PK;

drop table PROVEEDOR;

drop index ROL_PK;

drop table ROL;

drop index REALIZA_UNA_VENTA_FK;

drop index VENTA_A_CLIENTE_FK;

drop index VENTA_CON_DESCUENTO_FK;

drop index VENTA_PK;

drop table VENTA;
*/
/*==============================================================*/
/* Table: ALMACEN                                               */
/*==============================================================*/
create table ALMACENS (
   ID           SERIAL               not null,
   NOMBRE_ALMACEN       VARCHAR(50)          null,
   DESCRIPCION_ALMACEN  VARCHAR(255)         null,
   DIRECCION_ALMCEN     VARCHAR(255)         null,
   constraint PK_ALMACEN primary key (ID)
);

/*==============================================================*/
/* Index: ALMACEN_PK                                            */
/*==============================================================*/
create unique index ALMACEN_PK on ALMACENS (
ID
);

/*==============================================================*/
/* Table: CLIENTE                                               */
/*==============================================================*/
create table CLIENTES (
   ID           SERIAL               not null,
   NIT_CI               INT4                 null,
   NOMBRES              VARCHAR(30)          null,
   APELLIDO_PATERNO     VARCHAR(50)          null,
   APELLIDO_MATERNO     VARCHAR(50)          null,
   TELEFONO             INT4                 null,
   EMAIL                VARCHAR(50)          null,
   constraint PK_CLIENTE primary key (ID)
);

/*==============================================================*/
/* Index: CLIENTE_PK                                            */
/*==============================================================*/
create unique index CLIENTE_PK on CLIENTES (
ID
);

/*==============================================================*/
/* Table: COMPRA                                                */
/*==============================================================*/
create table COMPRAS (
   ID            SERIAL               not null,
   EMPLEADO_ID        INT4                 not null,
   PROVEEDOR_ID         INT4                 not null,
   FECHA_COMPRA         DATE                 null,
   MONTO_TOTAL          INT4                 null,
   constraint PK_COMPRA primary key (ID)
);

/*==============================================================*/
/* Index: COMPRA_PK                                             */
/*==============================================================*/
create unique index COMPRA_PK on COMPRAS (
ID
);

/*==============================================================*/
/* Index: TIENE_PROVEEDOR_FK                                    */
/*==============================================================*/
create  index TIENE_PROVEEDOR_FK on COMPRAS (
PROVEEDOR_ID
);

/*==============================================================*/
/* Index: REGISTRA_UNA_COMPRA_FK                                */
/*==============================================================*/
create  index REGISTRA_UNA_COMPRA_FK on COMPRAS (
EMPLEADO_ID
);

/*==============================================================*/
/* Table: CREDITO                                               */
/*==============================================================*/
create table CREDITOS (
   ID           SERIAL               not null,
   VENTA_ID             INT4                 null,
   COMPRA_ID            INT4                 null,
   CUOTA_INICIAL        DECIMAL(10,2)        null,
   constraint PK_CREDITO primary key (ID)
);

/*==============================================================*/
/* Index: CREDITO_PK                                            */
/*==============================================================*/
create unique index CREDITO_PK on CREDITOS (
ID
);

/*==============================================================*/
/* Index: COMPRA_A_CREDITO_FK                                   */
/*==============================================================*/
create  index COMPRA_A_CREDITO_FK on CREDITOS (
COMPRA_ID
);

/*==============================================================*/
/* Index: VENTA__A_CREDITO_FK                                   */
/*==============================================================*/
create  index VENTA__A_CREDITO_FK on CREDITOS (
VENTA_ID
);

/*==============================================================*/
/* Table: CUENTA                                                */
/*==============================================================*/
create table CUENTAS (
  ID            SERIAL               not null,
   EMPLEADO_ID        INT4                 not null,
   ROL_ID               INT4                 not null,
   NOMBRE_USUARIO       VARCHAR(15)          null,
   PASSWORD             CHAR(32)             null,
   FECHA_INICIO_VALIDES DATE                 null,
   FECHA_FINAL_VALIDES  DATE                 null,
   constraint PK_CUENTA primary key (ID)
);

/*==============================================================*/
/* Index: CUENTA_PK                                             */
/*==============================================================*/
create unique index CUENTA_PK on CUENTAS (
ID
);

/*==============================================================*/
/* Index: TIENE_ROL_FK                                          */
/*==============================================================*/
create  index TIENE_ROL_FK on CUENTAS (
ROL_ID
);

/*==============================================================*/
/* Index: CUENTA_DE_USUARIO_FK                                  */
/*==============================================================*/
create  index CUENTA_DE_USUARIO_FK on CUENTAS (
EMPLEADO_ID
);

/*==============================================================*/
/* Table: CUOTAS                                                */
/*==============================================================*/
create table CUOTAS (
   ID             SERIAL               not null,
   --CREDITO_ID           INT4                 not null,
   PLAN_DE_PAGO_ID      INT4                 not null,
   MONTO_CAPITAL        DECIMAL(4,2)         null,
   MONTO_INTERES        DECIMAL(4,2)         null,
   NUMERO_CUOTA         INT4                 null,
   FECHA_PAGO           DATE                 null,
   constraint PK_CUOTAS primary key (ID)
);

/*==============================================================*/
/* Index: CUOTAS_PK                                             */
/*==============================================================*/
create unique index CUOTAS_PK on CUOTAS (
ID
);

/*==============================================================*/
/* Index: CUOTAS_PAGADAS_FK                                     */
/*==============================================================*/
create  index CUOTAS_PAGADAS_FK on CUOTAS (
PLAN_DE_PAGO_ID
);

/*==============================================================*/
/* Table: DESCUENTO                                             */
/*==============================================================*/
create table DESCUENTOS (
   ID         SERIAL               not null,
   NOMBRE_DESCUENTO     VARCHAR(50)          null,
   FECHA_INCICIO_DESCUENTO DATE                 null,
   FECHA_FIN_DESCUENTO  DATE                 null,
   CUOTA_INICIAL        DECIMAL(10,2)        null,
   TIPO                 VARCHAR(10)          null,
   DESCRIPCION_DESCUENTO VARCHAR(255)         null,
   constraint PK_DESCUENTO primary key (ID)
);

/*==============================================================*/
/* Index: DESCUENTO_PK                                          */
/*==============================================================*/
create unique index DESCUENTO_PK on DESCUENTOS (
ID
);

/*==============================================================*/
/* Table: COMPRAS_ITEMS                                        */
/*==============================================================*/
create table COMPRAS_ITEMS (
   COMPRA_ID            INT4                 not null,
   ITEM_ID              INT4                 not null,
   PRECIO_DE_COMPRA     DECIMAL(10,2)        null,
   RECIO_REFERENCIAL_DE_VEWNTA DECIMAL(10,2)        null,
   GARANTIA             INT4                 null
   --constraint PK_COMPRAS_ITEMS primary key (COMPRA_ID)
);

/*==============================================================*/
/* Index: COMPRAS_ITEMS_PK                                     */
/*==============================================================*/
create index COMPRAS_ITEMS_FK on COMPRAS_ITEMS (
COMPRA_ID
);

/*==============================================================*/
/* Index: ARTICULO_COMPRADO_FK                                  */
/*==============================================================*/
create  index ARTICULO_COMPRADO_FK on COMPRAS_ITEMS (
ITEM_ID
);

/*==============================================================*/
/* Table: FACTURAS_ITEMS                                       */
/*==============================================================*/
create table FACTURAS_ITEMS (
   FACTURA_ID           INT4                 not null,
   ITEM_ID              INT4                 not null,
   CANTIDAD             int4               null,
   PRECIO_VENTA         DECIMAL(10,2)        null
);

/*==============================================================*/
/* Index: FACTURAS_ITEMS_PK                                    */
/*==============================================================*/
create  index FACTURAS_ITEMS_FK on FACTURAS_ITEMS (
FACTURA_ID
);


/*==============================================================*/
/* Index: ESTA_EN_UNA_FACTURA_FK                                */
/*==============================================================*/
create  index ESTA_EN_UNA_FACTURA_FK on FACTURAS_ITEMS (
ITEM_ID
);

/*==============================================================*/
/* Table: ITEMS_NOTA_DE_VENTAS                                    */
/*==============================================================*/
create table ITEMS_NOTA_DE_VENTAS (
   ITEM_ID              INT4                 not null,
   NOTA_DE_VENTA_ID              INT4                 null,
   CANTIDAD             INT4               null,
   PRECIO_VENTA         DECIMAL(10,2)        null

);

/*==============================================================*/
/* Index: ITEMS_NOTA_DE_VENTAS_PK                                 */
/*==============================================================*/
create index ITEMS_NOTA_DE_VENTAS_FK on ITEMS_NOTA_DE_VENTAS (
ITEM_ID
);

/*==============================================================*/
/* Index: TIENE_DETALLE_DE_VENTA_FK                             */
/*==============================================================*/
create  index TIENE_DETALLE_DE_VENTA_FK on ITEMS_NOTA_DE_VENTAS (
NOTA_DE_VENTA_ID
);

/*==============================================================*/
/* Table: DOSIFICACION                                          */
/*==============================================================*/
create table DOSIFICACIONS (
   ID      SERIAL               not null,
   CODIGO_DOSIFICACION  CHAR(20)             null,
   FECHA_INICIO_EMISION DATE                 null,
   FECHA_LIMITE_EMISION DATE                 null,
   NUMERO_DE_AUTORIZACION INT4                 null,
   NUMERO_DE_FACTURA    INT4                 null,
   constraint PK_DOSIFICACION primary key (ID)
);

/*==============================================================*/
/* Index: DOSIFICACION_PK                                       */
/*==============================================================*/
create unique index DOSIFICACION_PK on DOSIFICACIONS (
ID
);

/*==============================================================*/
/* Table: EMPLEADO                                              */
/*==============================================================*/
create table EMPLEADOS (
   ID        SERIAL               not null,
   DOC_IDENTIDAD        VARCHAR(20)          null,
   NOMBRES              VARCHAR(30)          null,
   APELLIDO_PATERNO     VARCHAR(50)          null,
   APELLIDO_MATERNO     VARCHAR(50)          null,
   FECHA_INGRESO        DATE                 null,
   CONTACTO             VARCHAR(255)         null,
   TELEFONO             INT4                 null,
   EMAIL                VARCHAR(50)          null,
   TIPO_DOC_IDENTIDAD   CHAR(20)             null,
   constraint PK_EMPLEADO primary key (ID)
);

/*==============================================================*/
/* Index: EMPLEADO_PK                                           */
/*==============================================================*/
create unique index EMPLEADO_PK on EMPLEADOS (
ID
);

/*==============================================================*/
/* Table: FACTURA                                               */
/*==============================================================*/
create table FACTURAS (
   ID           SERIAL               not null,
   VENTA_ID             INT4                 not null,
   DOSIFICACION_ID      INT4                 not null,
   FECHA_FACTURA        DATE                 null,
   MONTO_TOTAL          INT4                 null,
   constraint PK_FACTURA primary key (ID)
);

/*==============================================================*/
/* Index: FACTURA_PK                                            */
/*==============================================================*/
create unique index FACTURA_PK on FACTURAS (
ID
);

/*==============================================================*/
/* Index: TIENE_FACTURA_FK                                      */
/*==============================================================*/
create  index TIENE_FACTURA_FK on FACTURAS (
VENTA_ID
);

/*==============================================================*/
/* Index: TIENE_DOSIFICACION_FK                                 */
/*==============================================================*/
create  index TIENE_DOSIFICACION_FK on FACTURAS (
DOSIFICACION_ID
);

/*==============================================================*/
/* Table: GRUPO                                                 */
/*==============================================================*/
create table GRUPOS (
   ID             SERIAL               not null,
   GRUPO_ID         INT4                 null,
   NOMBRE_GRUPO         VARCHAR(50)          null,
   DESCRIPCION_GRUPO    VARCHAR(255)         null,
   constraint PK_GRUPO primary key (ID)
);

/*==============================================================*/
/* Index: GRUPO_PK                                              */
/*==============================================================*/
create unique index GRUPO_PK on GRUPOS (
ID
);

/*==============================================================*/
/* Index: TIENE_SUBGRUPOS_FK                                    */
/*==============================================================*/
create  index TIENE_SUBGRUPOS_FK on GRUPOS (
GRUPO_ID
);

/*==============================================================*/
/* Table: INDUSTRIA                                             */
/*==============================================================*/
create table INDUSTRIAS (
   ID         SERIAL               not null,
   NOMBRE_INDUSTRIA     VARCHAR(100)         null,
   DESCRIPCION_INDUSTRIS VARCHAR(255)         null,
   constraint PK_INDUSTRIA primary key (ID)
);

/*==============================================================*/
/* Index: INDUSTRIA_PK                                          */
/*==============================================================*/
create unique index INDUSTRIA_PK on INDUSTRIAS (
ID
);

/*==============================================================*/
/* Table: ITEM                                                  */
/*==============================================================*/
create table ITEMS (
   ID              SERIAL               not null,
   MARCA_ID             INT4                 not null,
   GRUPO_ID             INT4                 not null,
   INDUSTRIA_ID         INT4                 not null,
   ALMACEN_ID           INT4                 not null,
   NOMBRE_ITEM          VARCHAR(100)         null,
   DESCRIPCION          VARCHAR(255)         null,
   SN                   VARCHAR(100)         null,
   CODIGO               VARCHAR(10)          null,
   constraint PK_ITEM primary key (ID)
);

/*==============================================================*/
/* Index: ITEM_PK                                               */
/*==============================================================*/
create unique index ITEM_PK on ITEMS (
ID
);

/*==============================================================*/
/* Index: PERTENECE_A_UN_GRUPO_FK                               */
/*==============================================================*/
create  index PERTENECE_A_UN_GRUPO_FK on ITEMS (
GRUPO_ID
);

/*==============================================================*/
/* Index: ES_ALMACENADO_FK                                      */
/*==============================================================*/
create  index ES_ALMACENADO_FK on ITEMS (
ALMACEN_ID
);

/*==============================================================*/
/* Index: TIENE_MARCA_FK                                        */
/*==============================================================*/
create  index TIENE_MARCA_FK on ITEMS (
MARCA_ID
);

/*==============================================================*/
/* Index: TIENE_INDUSTRIA_FK                                    */
/*==============================================================*/
create  index TIENE_INDUSTRIA_FK on ITEMS (
INDUSTRIA_ID
);

/*==============================================================*/
/* Table: MARCA                                                 */
/*==============================================================*/
create table MARCAS (
   ID             SERIAL               not null,
   NOMBRE_MARCA         VARCHAR(50)          null,
   DESCRIPCION_MARCA    VARCHAR(255)         null,
   constraint PK_MARCA primary key (ID)
);

/*==============================================================*/
/* Index: MARCA_PK                                              */
/*==============================================================*/
create unique index MARCA_PK on MARCAS (
ID
);

/*==============================================================*/
/* Table: NOTA_DE_VENTA                                         */
/*==============================================================*/
create table NOTA_DE_VENTAS (
   ID              SERIAL               not null,
   VENTA_ID             INT4                 null,
   FECHA_NOTA_VENTA     DATE                 null,
   MONTO_TOTAL          INT4                 null,
   constraint PK_NOTA_DE_VENTA primary key (ID)
);

/*==============================================================*/
/* Index: NOTA_DE_VENTA_PK                                      */
/*==============================================================*/
create unique index NOTA_DE_VENTA_PK on NOTA_DE_VENTAS (
ID
);

/*==============================================================*/
/* Index: TIENE_NOTA_DE_VENTA_FK                                */
/*==============================================================*/
create  index TIENE_NOTA_DE_VENTA_FK on NOTA_DE_VENTAS (
VENTA_ID
);

/*==============================================================*/
/* Table: PIEZA                                                 */
/*==============================================================*/
create table PIEZAS (
   ID             SERIAL               not null,
   ITEM_ID              INT4                 not null,
   NOMBRE_PIEZA         VARCHAR(50)          null,
   SN                   VARCHAR(100)         null,
   DESCRIPCION_PIEZA    VARCHAR(255)         null,
   constraint PK_PIEZA primary key (ID)
);

/*==============================================================*/
/* Index: PIEZA_PK                                              */
/*==============================================================*/
create unique index PIEZA_PK on PIEZAS (
ID
);

/*==============================================================*/
/* Index: TIENE_PIEZAS_FK                                       */
/*==============================================================*/
create  index TIENE_PIEZAS_FK on PIEZAS (
ITEM_ID
);

/*==============================================================*/
/* Table: PLAN_DE_PAGO                                          */
/*==============================================================*/
create table PLAN_DE_PAGOS (
   ID      SERIAL               not null,
   CREDITO_ID           INT4                 not null,
   FECHA_INICIO_PAGOS   DATE                 null,
   NUMERO_DE_CUOTAS     INT4                 null,
   TIPO                 VARCHAR(10)          null,
   INTERES              DECIMAL(4,2)         null,
   NUMERO_DE_DIAS       INT4                 null,
   TOLERANCIA           INT4                 null,
   constraint PK_PLAN_DE_PAGO primary key (ID)
);

/*==============================================================*/
/* Index: PLAN_DE_PAGO_PK                                       */
/*==============================================================*/
create unique index PLAN_DE_PAGO_PK on PLAN_DE_PAGOS (
ID
);

/*==============================================================*/
/* Index: TIENE_PLAN_DE_PAGO_FK                                 */
/*==============================================================*/
create  index TIENE_PLAN_DE_PAGO_FK on PLAN_DE_PAGOS (
CREDITO_ID
);

/*==============================================================*/
/* Table: PROVEEDOR                                             */
/*==============================================================*/
create table PROVEEDORS (
   ID         SERIAL               not null,
   NOMBRE_PROVEEDOR     VARCHAR(100)         null,
   DIRECCION_PROVEEDOR  VARCHAR(255)         null,
   TELEFONO             INT4                 null,
   CONTACTO             VARCHAR(255)         null,
   EMAIL                VARCHAR(50)          null,
   EMAIL_CONTACTO       VARCHAR(100)         null,
   constraint PK_PROVEEDOR primary key (ID)
);

/*==============================================================*/
/* Index: PROVEEDOR_PK                                          */
/*==============================================================*/
create unique index PROVEEDOR_PK on PROVEEDORS (
ID
);

/*==============================================================*/
/* Table: ROL                                                   */
/*==============================================================*/
create table ROLS (
   ID               SERIAL               not null,
   NOMBRE_ROL           VARCHAR(20)          null,
   DESCRIPCION          VARCHAR(255)         null,
   constraint PK_ROL primary key (ID)
);

/*==============================================================*/
/* Index: ROL_PK                                                */
/*==============================================================*/
create unique index ROL_PK on ROLS (
ID
);

/*==============================================================*/
/* Table: VENTA                                                 */
/*==============================================================*/
create table VENTAS (
   ID             SERIAL               not null,
   CLIENTE_ID           INT4                 not null,
   DESCUENTO_ID         INT4                 null,
   EMPLEADO_ID        INT4                 not null,
   FECHA_VENTA          DATE                 null,
   PAGADO               BOOL                 null,
   constraint PK_VENTA primary key (ID)
);

/*==============================================================*/
/* Index: VENTA_PK                                              */
/*==============================================================*/
create unique index VENTA_PK on VENTAS (
ID
);

/*==============================================================*/
/* Index: VENTA_CON_DESCUENTO_FK                                */
/*==============================================================*/
create  index VENTA_CON_DESCUENTO_FK on VENTAS (
DESCUENTO_ID
);

/*==============================================================*/
/* Index: VENTA_A_CLIENTE_FK                                    */
/*==============================================================*/
create  index VENTA_A_CLIENTE_FK on VENTAS (
CLIENTE_ID
);

/*==============================================================*/
/* Index: REALIZA_UNA_VENTA_FK                                  */
/*==============================================================*/
create  index REALIZA_UNA_VENTA_FK on VENTAS (
EMPLEADO_ID
);

alter table COMPRAS
   add constraint FK_COMPRA_REGISTRA__EMPLEADO foreign key (EMPLEADO_ID)
      references EMPLEADOS (ID)
      on delete restrict on update restrict;

alter table COMPRAS
   add constraint FK_COMPRA_TIENE_PRO_PROVEEDO foreign key (PROVEEDOR_ID)
      references PROVEEDORS (ID)
      on delete restrict on update restrict;

alter table CREDITOS
   add constraint FK_CREDITO_COMPRA_A__COMPRA foreign key (COMPRA_ID)
      references COMPRAS (ID)
      on delete restrict on update restrict;

alter table CREDITOS
   add constraint FK_CREDITO_VENTA__A__VENTA foreign key (VENTA_ID)
      references VENTAS (ID)
      on delete restrict on update restrict;

alter table CUENTAS
   add constraint FK_CUENTA_CUENTA_DE_EMPLEADO foreign key (EMPLEADO_ID)
      references EMPLEADOS (ID)
      on delete restrict on update restrict;

alter table CUENTAS
   add constraint FK_CUENTA_TIENE_ROL_ROL foreign key (ROL_ID)
      references ROLS (ID)
      on delete restrict on update restrict;
/*
alter table CUOTAS
   add constraint FK_CUOTAS_CUOTAS_PA_PLAN_DE_ foreign key (CREDITO_ID, PLAN_DE_PAGO_ID)
      references PLAN_DE_PAGOS (CREDITO_ID, PLAN_DE_PAGO_ID)
      on delete restrict on update restrict;
*/
alter table CUOTAS
   add constraint FK_CUOTAS_PAGADAS_PLAN_DE_PAGO foreign key (PLAN_DE_PAGO_ID)
      references PLAN_DE_PAGOS (ID)
      on delete restrict on update restrict;

alter table COMPRAS_ITEMS
   add constraint FK_DETALLE__ARTICULO__ITEM foreign key (ITEM_ID)
      references ITEMS (ID)
      on delete restrict on update restrict;

alter table COMPRAS_ITEMS
   add constraint FK_DETALLE__ES_DETALL_COMPRA foreign key (COMPRA_ID)
      references COMPRAS (ID)
      on delete restrict on update restrict;

alter table FACTURAS_ITEMS
   add constraint FK_DETALLE__ESTA_EN_U_ITEM foreign key (ITEM_ID)
      references ITEMS (ID)
      on delete restrict on update restrict;

alter table FACTURAS_ITEMS
   add constraint FK_DETALLE__TIENE_DET_FACTURA foreign key (FACTURA_ID)
      references FACTURAS (ID)
      on delete restrict on update restrict;

alter table ITEMS_NOTA_DE_VENTAS
   add constraint FK_DETALLE__TIENE_DET_NOTA_DE_ foreign key (NOTA_DE_VENTA_ID)
      references NOTA_DE_VENTAS (ID)
      on delete restrict on update restrict;

alter table ITEMS_NOTA_DE_VENTAS
   add constraint FK_DETALLE__TIENE_DET_ITEM foreign key (ITEM_ID)
      references ITEMS (ID)
      on delete restrict on update restrict;

alter table FACTURAS
   add constraint FK_FACTURA_TIENE_DOS_DOSIFICA foreign key (DOSIFICACION_ID)
      references DOSIFICACIONS (ID)
      on delete restrict on update restrict;

alter table FACTURAS
   add constraint FK_FACTURA_TIENE_FAC_VENTA foreign key (VENTA_ID)
      references VENTAS (ID)
      on delete restrict on update restrict;

alter table GRUPOS
   add constraint FK_GRUPO_TIENE_SUB_GRUPO foreign key (GRUPO_ID)
      references GRUPOS (ID)
      on delete restrict on update restrict;

alter table ITEMS
   add constraint FK_ITEM_ES_ALMACE_ALMACEN foreign key (ALMACEN_ID)
      references ALMACENS (ID)
      on delete restrict on update restrict;

alter table ITEMS
   add constraint FK_ITEM_PERTENECE_GRUPO foreign key (GRUPO_ID)
      references GRUPOS (ID)
      on delete restrict on update restrict;

alter table ITEMS
   add constraint FK_ITEM_TIENE_IND_INDUSTRI foreign key (INDUSTRIA_ID)
      references INDUSTRIAS (ID)
      on delete restrict on update restrict;

alter table ITEMS
   add constraint FK_ITEM_TIENE_MAR_MARCA foreign key (MARCA_ID)
      references MARCAS (ID)
      on delete restrict on update restrict;

alter table NOTA_DE_VENTAS
   add constraint FK_NOTA_DE__TIENE_NOT_VENTA foreign key (VENTA_ID)
      references VENTAS (ID)
      on delete restrict on update restrict;

alter table PIEZAS
   add constraint FK_PIEZA_TIENE_PIE_ITEM foreign key (ITEM_ID)
      references ITEMS (ID)
      on delete restrict on update restrict;

alter table PLAN_DE_PAGOS
   add constraint FK_PLAN_DE__TIENE_PLA_CREDITO foreign key (CREDITO_ID)
      references CREDITOS (ID)
      on delete restrict on update restrict;

alter table VENTAS
   add constraint FK_VENTA_REALIZA_U_EMPLEADO foreign key (EMPLEADO_ID)
      references EMPLEADOS (ID)
      on delete restrict on update restrict;

alter table VENTAS
   add constraint FK_VENTA_VENTA_A_C_CLIENTE foreign key (CLIENTE_ID)
      references CLIENTES (ID)
      on delete restrict on update restrict;

alter table VENTAS
   add constraint FK_VENTA_VENTA_CON_DESCUENT foreign key (DESCUENTO_ID)
      references DESCUENTOS (ID)
      on delete restrict on update restrict;

