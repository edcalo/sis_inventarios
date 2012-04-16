Ext.define('SisInventarios.view.industria.List' ,{
    extend: 'Ext.window.Window',
    alias : 'widget.industrialist',
    layout: 'fit',
    autoShow: true,
    modal:true,
    width: 520,
    height: 415,
    iconCls:'icon-industry-16x16',
    title: 'Lista de Industrias ',
    initComponent: function() {
        var sm = Ext.create('Ext.selection.CheckboxModel',{
            listeners:{
                'selectionchange': this.selectChange,
                scope: this
            }
        });
        this.listeners = {
            'destroy': function(window, options){
                Ext.data.StoreManager.lookup('Industrias').clearFilter();
            },
            'hide': function(window, options){
                Ext.data.StoreManager.lookup('Industrias').clearFilter();
            }
        },
        this.items=[{
            id:'listaindustria',
            xtype: 'grid',
            border: false,
            store: 'Industrias',
            columns : [{
                header: 'Nombre',
                dataIndex: 'nombre_industria',
                width:100
            },{
                header: 'Descripcion',
                dataIndex: 'descripcion_industria', 
                width: 380
            }],
            selModel: sm,
            bbar:Ext.create('Ext.PagingToolbar', {
                store: Ext.data.StoreManager.lookup('Industrias'),
                displayInfo: true,
                displayMsg: 'Mostrando {0} - {1} industrias de  {2}',
                emptyMsg: "No hay industrias registradas"
            })
        }];
        
        this.tbar =[{
            title: 'Acciones',
            xtype: 'buttongroup',
            columns: 3,
            items:[{
                xtype: 'buttongroup',
                items:{
                    scale: 'large',
                    text: 'Registrar',
                    action: 'addindustria',
                    iconCls: 'icon-add-32x32'
                }
            },{
                xtype: 'buttongroup',
                defaults:{
                    scale: 'large'
                },
                items:[{
                    text: 'Modificar',
                    iconCls: 'icon-edit-32x32',
                    action: 'editindustria',
                    disabled:true
                },{
                    text: 'Eliminar',
                    iconCls:'icon-delete-32x32',
                    action:'deleteindustria',
                    disabled:true
                }]
            }]
        }];
        
        this.callParent(arguments);
    },

    selectChange: function( sm, selected, options ){
        var bedit = this.down('button[action=editindustria]');
        var bdelete = this.down('button[action=deleteindustria]');
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