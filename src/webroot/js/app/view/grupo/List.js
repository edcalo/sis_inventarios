Ext.define('SisInventarios.view.grupo.List' ,{
    extend: 'Ext.window.Window',
    alias : 'widget.gruposlist',
    layout: 'border',
    autoShow: true,
    modal:true,
    width: 720,
    height: 415,
    title: 'Lista de Grupos',
    initComponent: function() {
        var sm = Ext.create('Ext.selection.CheckboxModel',{
            listeners:{
                'selectionchange': this.selectChange,
                scope: this
            }
        });
        this.treestore = Ext.create('Ext.data.TreeStore', {
            proxy: {
                type: 'ajax',
                url: 'admin/grupos/tree',
                method:'POST'
            },
            root: {
                text: 'Grupos',
                id: 1,
                expanded: true
            },
            folderSort: true,
            
            sorters: [{
                property: 'text',
                direction: 'ASC'
            }]
        });

        this.tree = Ext.create('Ext.tree.Panel', {
            id:'tree',
            store: this.treestore,
            viewConfig: {
                plugins: {
                    ptype: 'treeviewdragdrop'
                }
            },
            region:'west',
            rootVisible:false,
            width: 200,
            useArrows: true
        });
        this.grid = {
            id:'listagrupos',
            xtype: 'grid',
            region:'center',
            border: false,
            store: 'Grupos',
            title: 'Sub-grupos',
            columns : [ {
                header: 'Codigo',
                dataIndex: 'codigo',
                width: 80
            },{
                header: 'Nombre',
                dataIndex: 'nombre_grupo',
                renderer:function(value, metaData){
                    metaData.style = 'font-size:120%; font-weight: bold';
                    return value;
                },
                width:120
            },{
                header: 'Descripcion',
                dataIndex: 'descripcion_grupo',
                renderer:function(value, metaData){
                    metaData.style = 'white-space:normal';
                    return value;
                },
                width: 330
            }],
            selModel: sm,
            bbar:Ext.create('Ext.PagingToolbar', {
                store: Ext.data.StoreManager.lookup('Grupos'),
                displayInfo: true,
                displayMsg: 'Mostrando {0} - {1} grupos de  {2}',
                emptyMsg: "No hay grupos registrados"
            })
        };
        this.items=[this.grid, this.tree];
        
        this.tbar =[{
            title: 'Acciones',
            xtype: 'buttongroup',
            columns: 3,
            items:[{
                xtype: 'buttongroup',
                items:{
                    scale: 'large',
                    text: 'Registrar',
                    action: 'addgrupo',
                    iconCls: 'icon-add-server'
                }
            },{
                xtype: 'buttongroup',
                defaults:{
                    scale: 'large'
                },
                items:[{
                    text: 'Modificar',
                    iconCls: 'icon-edit-aux',
                    action: 'editgrupo',
                    disabled:true
                },{
                    text: 'Eliminar',
                    iconCls:'icon-delete-aux',
                    action:'deletegrupo',
                    disabled:true
                }]
            }]
        }];
        this.callParent(arguments);
    },
    selectChange: function( sm, selected, options ){
        var bedit = this.down('button[action=editgrupo]');
        var bdelete = this.down('button[action=deletegrupo]');
        
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