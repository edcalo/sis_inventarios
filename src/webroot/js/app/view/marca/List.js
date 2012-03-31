Ext.define('SisInventarios.view.marca.List' ,{
    extend: 'Ext.window.Window',
    //store: 'Marcas',
    alias : 'widget.marcaslist',
    layout: 'fit',
    autoShow: true,
    modal: true,
    width: 550,
    height: 420,
    title : 'Marcas Registradas',
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
                Ext.data.StoreManager.lookup('Marcas').clearFilter();
            },
            'hide': function(window, options){
                Ext.data.StoreManager.lookup('Marcas').clearFilter();
            }
        }
        this.items=[{
            id:'listamarcas',
            xtype:'grid',
            border: false,
            store:'Marcas',
            columns: [{
                header: 'Nombre',
                dataIndex: 'nombre_marca',
                width:150
            },{
                header:'Descripcion',
                dataIndex: 'descripcion_marca',
                width:350
            }],
            selModel: sm,
            bbar:Ext.create('Ext.PagingToolbar', {
                store: Ext.data.StoreManager.lookup('Marcas'),
                displayInfo: true,
                displayMsg: 'Mostrando {0} - {1} marcas de  {2}',
                emptyMsg: "No hay marcas registradas"
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
                    action: 'addmarcas',
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
                    action: 'editmarcas',
                    disabled:true
                },{
                    text: 'Eliminar',
                    iconCls:'icon-delete-marcas',
                    action:'deletemarcas',
                    disabled:true
                }]
            }]
        }]
        this.callParent(arguments);
    },
    selectChange: function( sm, selected, options ){
        var bedit = this.down('button[action=editmarcas]');
        var bdelete = this.down('button[action=deletemarcas]');
        //var bdinfo = this.down('button[action=infoserver]');
        //var bdviewer = this.down('button[action=eventviewerserver]');
        //var bdstatistic = this.down('button[action=statisticsserver]');
        if(selected.length > 0){
            bdelete.enable();
            //bdstatistic.enable();
            if(selected.length == 1){
                bedit.enable();
                //bdinfo.enable();
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