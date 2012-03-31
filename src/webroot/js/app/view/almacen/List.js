Ext.define('SisInventarios.view.almacen.List' ,{
    extend: 'Ext.window.Window',
    alias : 'widget.almacenlist',
    layout: 'fit',
    autoShow: true,
    modal: true,
    width: 650,
    height: 420,
    title : 'Almacenes Registradas',
    iconCls: 'icon-online',
        
    initComponent: function() {
        var sm = Ext.create('Ext.selection.CheckboxModel',{
            listeners:{
                'selectionchange': this.selectChange,
                scope: this
            }
        });
        this.listeners = {
            'destroy': function(window, options){
                Ext.data.StoreManager.lookup('Almacenes').clearFilter();
            },
            'hide': function(window, options){
                Ext.data.StoreManager.lookup('Almacenes').clearFilter();
            }
        }
        this.items=[{
            id:'listaalmacenes',
            xtype:'grid',
            border: false,
            store:'Almacenes',
            columns: [{
                header: 'Nombre',
                dataIndex: 'nombre_almacen',
                width:150
            },{
                header:'Direccion',
                dataIndex:'direccion_almacen',
                width:150
            },{
                header:'Descripcion',
                dataIndex: 'descripcion_almacen',
                width:350
            }],
            selModel: sm,
            bbar:Ext.create('Ext.PagingToolbar', {
                store: Ext.data.StoreManager.lookup('Almacenes'),
                displayInfo: true,
                displayMsg: 'Mostrando {0} - {1} almacenes de  {2}',
                emptyMsg: "No hay Almacenes registradas"
            })
        }],
        this.tbar=[{
            title:'Acciones',
            xtype:'buttongroup',
            columns:3,
            items:[{
                xtype:'buttongroup',
                items:{
                    scale: 'large',
                    text: 'Registrar',
                    action: 'addalmacen',
                    iconAlign: 'top',
                    iconCls: 'icon-add-marcas'
                }
            },{
                xtype: 'buttongroup',
                defaults:{
                    scale: 'large',
                    iconAlign: 'top'
                },
                items:[{
                    text: 'Modificar',
                    iconCls: 'icon-edit-marcas',
                    action: 'editalmacen',
                    disabled:true
                },{
                    text: 'Eliminar',
                    iconCls:'icon-delete-marcas',
                    action:'deletealmacen',
                    disabled:true
                }]
            }]
        }]
        this.callParent(arguments);
    },
    selectChange: function( sm, selected, options ){
        var bedit = this.down('button[action=editalmacen]');
        var bdelete = this.down('button[action=deletealmacen]');
        if(selected.length > 0){
            bdelete.enable();
            if(selected.length == 1){
                bedit.enable();
            }else{
                bedit.disable();
            }
        }else{
            bedit.disable();
            bdelete.disable();
        }
    }

});