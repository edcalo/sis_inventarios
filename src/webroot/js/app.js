/*Ext.require([
    'SisInventarios.view.compra.List'
]);*/
Ext.Loader.setConfig({
    enabled: true
});

Ext.application({
    name: 'SisInventarios',
    paths: {
        'Ext.ux': 'js/libs/ext-plugins'
    },
    appFolder: 'js/app',
    controllers: [
    'Roles',
    'Proveedores',
    'Grupos',
    'Marcas',
    'Industrias',
    'Almacenes',
    'Clientes',
    'Empleados',
    'Dosificaciones',
    'Descuentos',
    'Compras',
    'Items'
    ],
    listRoles: function(){
        var roles = Ext.widget('rollist');
        roles.show();
    },
    listProveedores: function(){
        var proveedores = Ext.widget('proveedoreslist');
        proveedores.show();
    },
    listgrupos: function(){
        var grupos = Ext.widget('gruposlist');
        grupos.show();
    },
    listMarcas: function (){
        var marcas = Ext.widget('marcaslist');
        marcas.show();
    },
    listIndustria: function (){
        var industrias = Ext.widget('industrialist');
        industrias.show();
    },
    listAlmacen: function(){
        var almacen = Ext.widget('almacenlist');
        almacen.show();
    },
    listCliente: function(){
        var  cliente = Ext.widget('clientelist');
        cliente.show();
    },
    listEmpleados: function(){
        var empleados = Ext.widget('empleadolist');
        empleados.show();
    },
    listDosificaciones: function(){
        var dosificaciones = Ext.widget('dosificacionlist');
        dosificaciones.show();
    },
    listDescuentos: function(){
        var descuentos = Ext.widget('descuentolist');
        descuentos.show();
    },
    launch: function() {
        var dashboard = Ext.create('Ext.Panel',{
            id: 'home',
            iconCls: 'icon-home',
            title: 'Dashboard',
            contentEl:'main_container',
            bodyStyle: 'background-color: transparent',
            autoScroll: true
        });
        var panel_inventarios=Ext.create('Ext.Panel',{

            title: 'Sistema de Inventarios',
            layout: 'border',            
            items:[{             
                id:'item-list',
                xtype: 'panel',
                region:'center',
                margins: '0 0 5 0',
                layout:'fit',
                bodyStyle:'padding:5px',                
                items:[{                        
                    xtype:'panel',                        
                    layout:'border',                        
                    items:[{                                
                        xtype:'compralist',
                        //itemId:'gridPanelCompra',
                        region:'north'
                                
                    },{
                        xtype:'itemlist',
                        //itemId:'detallePanelItem',
                        //title:'Items que corresponden a la compra seleccionada',
                        //bodyPadding:5,
                        region:'center'
                                
                    }]
                }]
            }/*,{
                title: 'Detalle del item seleccionado',
                collapsible: true,
                region:'east',
                html:'Detalle del item items.View',
                width:400,
                margins: '0 0 5 5'

            }*/],
            tbar:[{
                title: 'Acciones',
                xtype: 'buttongroup',
                columns: 3,
                items:[{
                    xtype: 'buttongroup',
                    items:{
                        scale: 'large',                        
                        text: 'Registrar',
                        action:'addrol',
                        iconAlign: 'top',
                        iconCls: 'icon-add-32x32'
                    }
                },{
                    xtype: 'buttongroup',
                    items:[{
                        id: 'editar',
                        text: 'Modificar',
                        action:'editcompra',
                        scale: 'large',
                        iconAlign: 'top',                        
                        iconCls: 'icon-edit-32x32',
                        disable:true
                    },{
                        id: 'eliminar',
                        text: 'Eliminar',
                        action:'deletecompra',
                        iconCls:'icon-delete-32x32',
                        scale: 'large',
                        iconAlign: 'top',
                        disable:true
                    }]
                },{
                    xtype: 'buttongroup',
                    defaults:{
                        scale: 'large',
                        iconAlign: 'top'
                    },
                    items:[{
                        text: 'Buscar',                        
                        iconCls: 'icon-search-32x32'
                    },{

                        text: 'Ordenar',
                        iconCls:'icon-ordenar-aux'
                    }]
                }]
            },'->', {
                title: 'Catalogos',
                xtype: 'buttongroup',
                columns: 4,
                defaults:{
                    scale: 'large',
                    iconAlign: 'top'
                },
                items:[{
                    xtype: 'buttongroup',
                    defaults:{
                        scale: 'large',
                        iconAlign: 'top'
                    },
                    items:[ {
                        text: 'Proveedores',
                        iconCls: 'icon-provider-32x32',
                        handler: this.listProveedores
                    },{
                        text: 'Grupos',
                        iconCls:'icon-group-32x32',
                        handler: this.listgrupos
                    }, {
                        text: 'Roles',
                        iconCls:'icon-roles-32x32',
                        handler: this.listRoles

                    },{
                        text:'Marcas',
                        iconCls:'icon-marcas-32x32',
                        handler: this.listMarcas
                    },{
                        text:'Industrias',
                        iconCls:'icon-industry-32x32',
                        handler: this.listIndustria
                    },{
                        text:'Almacenes',
                        iconCls:'icon-depot-32x32',
                        handler: this.listAlmacen
                    },{
                        text:'Clientes',
                        iconCls:'icon-client-32x32',
                        handler: this.listCliente
                    },{
                        text: 'Empleados',
                        iconCls:'icon-employee-32x32',
                        handler: this.listEmpleados

                    },{
                        text: 'Dosificacion',
                        iconCls:'icon-ii-32x32',
                        handler: this.listDosificaciones

                    },{
                        text: 'Descuentos',
                        iconCls:'icon-descuentos-32x32',
                        handler: this.listDescuentos

                    }]
                }]
            }]
        });
        var panel_principal = Ext.create('Ext.tab.Panel',{
            activeItem: 'ftp-user-list',
            region: 'center',
            id: 'main',
            items:[dashboard, panel_inventarios]

        });

        Ext.create('Ext.container.Viewport', {
            layout: 'border',
            items: [{
                contentEl: 'header',
                region:'north',
                height: 40
            },panel_principal,{
                contentEl: 'footer',
                border: false,
                region:'south'
            }]
        });
    }
});