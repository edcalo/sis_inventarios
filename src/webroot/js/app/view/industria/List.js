Ext.define('SisInventarios.view.industria.List' ,{
    extend: 'Ext.window.Window',
    alias : 'widget.industrialist',
    layout: 'fit',
    autoShow: true,
    modal:true,
    width: 520,
    height: 415,
    iconCls:'icon-list',
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
                /*renderer:function(value, metaData){
                    metaData.style = 'font-size:120%; font-weight: bold';
                    return value;
                },*/
                width:100
            },{
                header: 'Descripcion',
                dataIndex: 'descripcion_industria',
                /*renderer:function(value, metaData){
                    metaData.style = 'white-space:normal';
                    return value;
                },*/
                width: 390
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
                    action: 'editindustria',
                    disabled:true
                },{
                    text: 'Eliminar',
                    iconCls:'icon-delete-marcas',
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
        //var bdinfo = this.down('button[action=infoserver]');
        //var bdviewer = this.down('button[action=eventviewerserver]');
        //var bdstatistic = this.down('button[action=statisticsserver]');
        if(selected.length > 0){
            bdelete.enable();
           // bdstatistic.enable();
            if(selected.length == 1){
                bedit.enable();
               // bdinfo.enable();
                //bdviewer.enable()
            }else{
                bedit.disable();
                //bdinfo.disable();
                //bdviewer.disable()
            }
        }else{
            bedit.disable();
            bdelete.disable();
            //bdinfo.disable();
            //bdviewer.disable();
            //bdstatistic.disable();
        }
    }
});