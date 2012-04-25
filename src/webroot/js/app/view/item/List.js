Ext.define('SisInventarios.view.item.List' ,{
    extend: 'Ext.panel.Panel',
    alias : 'widget.itemlist',
    title : 'Items Que corresponden a la Compra seleccionada',    
    layout:'fit',
    initComponent: function() {    
        var sm = Ext.create('Ext.selection.CheckboxModel',{
            listeners:{
                'selectionchange': this.selectChange,
                scope: this
            }
        });
        this.listeners = {
            'destroy': function(window, options){
                Ext.data.StoreManager.lookup('Items').clearFilter();
            },
            'hide': function(window, options){
                Ext.data.StoreManager.lookup('Items').clearFilter();
            }
        }
        this.items=[{
            id:'listaitems',
            xtype:'grid',
            border:false,
            store:'Items',
            columns:[{
                header:'Nombre Item',
                dataIndex:'nombre_articulo',
                width:150
            },{
                header:'Descripcion',
                dataIndex:'descripcion',
                width:150
            },{
                header:'Nro. de serie',
                dataIndex:'numero_de_serie',
                width:80
            },{
                header:'Codigo',
                dataIndex:'codigo',
                width:80
            },{
                header:'Precio Compra',
                dataIndex:'precio_compra',
                width:100
            },{
                header:'Precio Ref. Venta',
                dataIndex:'precio_referencia_venta',
                width:100
            },{
                header:'Garantia',
                dataIndex:'garantia_compra',
                width:80
            },{
                header:'Almacen',
                dataIndex:'almacen_id',
                width:150,
                renderer: function(value, metaData, record, rowIndex, colIndex, store){
                    var sp = Ext.data.StoreManager.lookup('Almacenes');
                    var index = sp.find('id', value);
                    if(index >= 0 ){
                        return sp.getAt(index).get('nombre_almacen');
                    }
                           
                    return value;
                } 
            },{
                header:'Marca',
                dataIndex:'marca_id',                        
                width:150,
                renderer: function(value, metaData, record, rowIndex, colIndex, store){
                    var sp = Ext.data.StoreManager.lookup('Marcas');
                    var index = sp.find('id', value);
                    if(index >= 0 ){
                        return sp.getAt(index).get('nombre_marca');
                    }
                           
                    return value;
                }                        
            },{
                header:'Industria',
                dataIndex:'industria_id',                        
                width:150,
                renderer: function(value, metaData, record, rowIndex, colIndex, store){
                    var sp = Ext.data.StoreManager.lookup('Industrias');
                    var index = sp.find('id', value);
                    if(index >= 0 ){
                        return sp.getAt(index).get('nombre_industria');
                    }
                           
                    return value;
                }                        
            },{
                header:'Grupo',
                dataIndex:'grupo_id',
                width:150,
                renderer: function(value, metaData, record, rowIndex, colIndex, store){
                    var sp = Ext.data.StoreManager.lookup('Grupos');
                    var index = sp.find('id', value);
                    if(index >= 0 ){
                        return sp.getAt(index).get('nombre_grupo');
                    }
                           
                    return value;
                } 
            },{
                xtype:'actioncolumn',
                widht:50,
                items:[{
                    tooltip:'Registrar',
                    icon:'/img/icons/common/16x16/add.png',
                    handler:function(grid,rowIndex,colIndex){                        
                        Ext.widget('itemadd');
                    }
                },{
                    tooltip:'Editar',
                    icon:'/img/icons/common/16x16/pencil.png',
                    handler:function(grid,rowIndex,colIndex){
                        var rec = grid.getStore().getAt(rowIndex);
                        var view = Ext.widget('itemadd');
                        view.down('form').loadRecord(rec);
                    //alert('edit '+rec.get('nombre_articulo'));
                    }
                },{
                    icon:'/img/icons/common/16x16/delete.png',
                    tooltip:'Eliminar',
                    handler:function(grid,rowIndex,colIndex){
                        //var rec = grid.getStore().getAt(rowIndex);  
                        Ext.MessageBox.confirm(
                            'eliminar Item',
                            'Esta seguro que desea eliminar el item seleccionado',
                            function(confirm){
                                if(confirm == 'yes'){
                                    var sp = Ext.data.StoreManager.lookup('Items');
                                    var row =sp.getAt(rowIndex);
                                    sp.remove(row);
                                    sp.sync();                                                           
                                }
                            },
                            this
                            );
                        
                    }
                }]
            }],
            selModel:sm,
            bbar:Ext.create('Ext.PagingToolbar', {
                store: Ext.data.StoreManager.lookup('Items'),
                displayInfo: true,
                displayMsg: 'Mostrando {0} - {1} Items de  {2}',
                emptyMsg: "No hay Items registradas"
            })
        }];//
        this.tbar=[{
            title:'Acciones',
            xtype:'buttongroup',
            columns:3,
            items:[{
                xtype:'buttongroup',
                items:{
                    scale: 'large',
                    text: 'Registrar',
                    action: 'additem',
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
                    action: 'edititem',
                    disabled:true
                },{
                    text: 'Eliminar',
                    iconCls:'icon-delete-32x32',
                    action:'deleteitem',
                    disabled:true
                }]
            }]
        }]
        this.callParent(arguments);
    } ,
    selectChange: function( sm, selected, options ){
        var bedit = this.down('button[action=edititem]');
        var bdelete = this.down('button[action=deleteitem]');
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