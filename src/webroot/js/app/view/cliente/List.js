Ext.define('SisInventarios.view.cliente.List' ,{
    extend: 'Ext.window.Window',
    alias : 'widget.clientelist',
    layout: 'fit',
    autoShow: true,
    modal: true,
    width: 710,
    height: 420,
    title : 'Clientes Registrados',
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
                Ext.data.StoreManager.lookup('Clientes').clearFilter();
            },
            'hide': function(window, options){
                Ext.data.StoreManager.lookup('Clientes').clearFilter();
            }
        }
        this.items=[{
            id:'listaclientes',
            xtype:'grid',
            border: false,
            store:'Clientes',
            columns: [{
                header:'NIT o C.I.',
                dataIndex:'nit_ci',
                width:100
            },{
                header: 'Nombres',
                dataIndex: 'nombres',
                width:120
            },{
                header:'Apellido Paterno',
                dataIndex: 'apellido_paterno',
                width:120
            },{
                header:'Apellido Materno',
                dataIndex: 'apellido_materno',
                width:120
            },{
                header:'Telefono.',
                dataIndex:'telefono',
                width:80
            },{
                header:'Email',
                dataIndex:'email',
                width:150
            }],
            selModel: sm,
            bbar:Ext.create('Ext.PagingToolbar', {
                store: Ext.data.StoreManager.lookup('Clientes'),
                displayInfo: true,
                displayMsg: 'Mostrando {0} - {1} clientes de  {2}',
                emptyMsg: "No hay Clientes registrados"
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
                    action: 'addcliente',
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
                    action: 'editcliente',
                    disabled:true
                },{
                    text: 'Eliminar',
                    iconCls:'icon-delete-marcas',
                    action:'deletecliente',
                    disabled:true
                }]
            }]
        }]
        this.callParent(arguments);
    },
    selectChange: function( sm, selected, options ){
        var bedit = this.down('button[action=editcliente]');
        var bdelete = this.down('button[action=deletecliente]');
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