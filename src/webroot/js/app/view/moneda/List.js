Ext.define('SisInventarios.view.moneda.List' ,{
    extend: 'Ext.window.Window',
    //store: 'monedas',
    alias : 'widget.monedaslist',
    layout: 'fit',
    autoShow: true,
    modal: true,
    width: 550,
    height: 420,
    title : 'Monedas Registradas',
    iconCls: 'icon-monedas-16x16',
        
    initComponent: function() {
        var sm = Ext.create('Ext.selection.CheckboxModel',{
            listeners:{
                'selectionchange': this.selectChange,
                scope: this
            }
        });
        this.listeners = {
            'destroy': function(window, options){
                Ext.data.StoreManager.lookup('Monedas').clearFilter();
            },
            'hide': function(window, options){
                Ext.data.StoreManager.lookup('Monedas').clearFilter();
            }
        }
        this.items=[{
            id:'listamonedas',
            xtype:'grid',
            border: false,
            store:'Monedas',
            columns: [{
                header: 'Nombre',
                dataIndex: 'nombre_moneda',
                width:150
            },{
                header:'Simbolo',
                dataIndex: 'simbolo_moneda',
                width:350
            }],
            selModel: sm,
            bbar:Ext.create('Ext.PagingToolbar', {
                store: Ext.data.StoreManager.lookup('Monedas'),
                displayInfo: true,
                displayMsg: 'Mostrando {0} - {1} monedas de  {2}',
                emptyMsg: "No hay monedas registradas"
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
                    action: 'addmoneda',
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
                    action: 'editmoneda',
                    disabled:true
                },{
                    text: 'Eliminar',
                    iconCls:'icon-delete-32x32',
                    action:'deletemoneda',
                    disabled:true
                }]
            }]
        }]
        this.callParent(arguments);
    },
    selectChange: function( sm, selected, options ){
        var bedit = this.down('button[action=editmoneda]');
        var bdelete = this.down('button[action=deletemoneda]');
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