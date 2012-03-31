/*Ext.Loader.setConfig({
    enabled: true
});*/
Ext.Loader.setPath('Ext.ux', '../libs/ext-4.0.7-gpl/examples/ux/');
Ext.application({
    name: 'SisInventarios',
    appFolder: 'js/app',
    controllers: [
    'Roles',
    'Proveedores',
    'Marcas',
    'Industrias',
    'Almacenes',
    'Clientes'
    ],
    listRoles: function(){
        var roles = Ext.widget('rollist');
        roles.show();
    },
    listProveedores: function(){
        var proveedores = Ext.widget('proveedoreslist');
        proveedores.show();
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
    launch: function() {
        var panel_inicio = Ext.create('Ext.Panel',{
            id: 'home',
            iconCls: 'icon-home',
            title: 'Dashboard',
            contentEl:'main_container',
            bodyStyle: 'background-color: transparent',
            autoScroll: true
        });
        var panel_ftp=Ext.create('Ext.Panel',{
            title: 'Sistema de Inventarios',
            layout: 'border',
            items:[{
                id:'item-list',
                xtype: 'panel',
                region:'center',
                margins: '0 0 5 0',
                html: 'Lista de los items'
            },{
                title: 'Detalle del item seleccionado',
                collapsible: true,
                region:'east',
                html:'Detalle del item items.View',
                width:400,
                margins: '0 0 5 5'

            }],
            tbar:[{
                title: 'Acciones',
                xtype: 'buttongroup',
                columns: 3,
                items:[{
                    xtype: 'buttongroup',
                    items:{
                        scale: 'large',                        
                        text: 'Registrar',
                        iconAlign: 'top',
                        iconCls: 'icon-add-aux'
                    }
                },{
                    xtype: 'buttongroup',
                    items:[{
                        id: 'editar',
                        text: 'Modificar',
                        scale: 'large',
                        iconAlign: 'top',                        
                        iconCls: 'icon-edit-aux'
                    },{
                        id: 'eliminar',
                        text: 'Eliminar',
                        iconCls:'icon-delete-aux',
                        scale: 'large',
                        iconAlign: 'top'
                    }]
                },{
                    xtype: 'buttongroup',
                    defaults:{
                        scale: 'large',
                        iconAlign: 'top'
                    },
                    items:[{
                        text: 'Buscar',                        
                        iconCls: 'icon-buscar-aux'
                    },{

                        text: 'Ordenar',
                        iconCls:'icon-ordenar-aux'
                    }]
                }]
            },{
                title: 'Configuracion de fuente de datos',
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
                    items:[{
                        text: 'Gestiones',                        
                        iconCls: 'icon-gestion-32'
                    },{
                        text: 'Turnos',
                        iconCls: 'icon-turno-32'
                    },{
                        text: 'Unidades',
                        iconCls:'icon-unidad-32'
                    }, {
                        text: 'Cargos',
                        iconCls:'icon-cargos-32'

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
                        iconCls: 'icon-turno-32',
                        handler: this.listProveedores
                    },{
                        text: 'Grupos',
                        iconCls:'icon-unidad-32'
                    }, {
                        text: 'Roles',
                        iconCls:'icon-cargos-32',
                        handler: this.listRoles

                    },{//Boton para acceder al catalogo de Marcas
                        text:'Marcas',
                        iconCls:'icon-marcas-32',
                        handler: this.listMarcas
                    },{
                        text:'Industrias',
                        iconCls:'icon-industria-32',
                        handler: this.listIndustria
                    },{
                        text:'Almacenes',
                        iconCls:'icon-almacen-32',
                        handler: this.listAlmacen
                    },{
                        text:'Clientes',
                        iconCls:'icon-cliente-32',
                        handler: this.listCliente
                    }]
                }]
            }]
        });
        var panel_principal = Ext.create('Ext.tab.Panel',{
            activeItem: 'ftp-user-list',
            region: 'center',
            id: 'main',
            items:[panel_inicio, panel_ftp]
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