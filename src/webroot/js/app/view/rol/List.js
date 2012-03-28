Ext.define('SisInventarios.view.rol.List' ,{
    extend: 'Ext.window.Window',
    alias : 'widget.rollist',
    layout: 'fit',
    autoShow: true,
    modal:true,
    width: 550,
    height: 415,
    title: 'Lista de Roles',
    initComponent: function() {
        var sm = Ext.create('Ext.selection.CheckboxModel',{
            listeners:{
                'selectionchange': this.selectChange,
                scope: this
            }
        });

        this.items=[{
            id:'listaroles',
            xtype: 'grid',
            border: false,
            store: 'Roles',
            columns : [{
                header: 'Nombre',
                dataIndex: 'nombre_rol',
                renderer:function(value, metaData){
                    metaData.style = 'font-size:120%; font-weight: bold';
                    return value;
                },
                width:120
            },{
                header: 'Descripcion',
                dataIndex: 'descripcion',
                renderer:function(value, metaData){
                    metaData.style = 'white-space:normal';
                    return value;
                },
                width: 380
            }],
            selModel: sm,
            bbar:Ext.create('Ext.PagingToolbar', {
                store: Ext.data.StoreManager.lookup('Roles'),
                displayInfo: true,
                displayMsg: 'Mostrando {0} - {1} roles de  {2}',
                emptyMsg: "No hay roles registrados"
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
                    action: 'addrol',
                    iconAlign: 'top',
                    iconCls: 'icon-add-server'
                }
            },{
                xtype: 'buttongroup',
                defaults:{
                    scale: 'large',
                    iconAlign: 'top'
                },
                items:[{
                    text: 'Modificar',
                    iconCls: 'icon-edit-server',
                    action: 'editrol',
                    disabled:true
                },{
                    text: 'Eliminar',
                    iconCls:'icon-delete-server',
                    action:'deleterol',
                    disabled:true
                }]
            }]
        },{
            title: 'Reportes',
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
                    text: 'Informacion',
                    iconCls: 'icon-information-server',
                    action:'infoserver',
                    disabled:true
                },{
                    text: 'Estadisticas',
                    iconCls: 'icon-statistics-server',
                    action:'statisticsserver',
                    disabled:true
                },{
                    text: 'Visor de eventos',
                    iconCls:'icon-diagnosis-server',
                    action:'eventviewerserver',
                    disabled:true
                }]
            }]
        }];
        this.callParent(arguments);
    },
    selectChange: function( sm, selected, options ){
        var bedit = this.down('button[action=editserver]');
        var bdelete = this.down('button[action=deleteserver]');
        var bdinfo = this.down('button[action=infoserver]');
        var bdviewer = this.down('button[action=eventviewerserver]');
        var bdstatistic = this.down('button[action=statisticsserver]');
        if(selected.length > 0){
            bdelete.enable();
            bdstatistic.enable();
            if(selected.length == 1){
                bedit.enable();
                bdinfo.enable();
                bdviewer.enable()
            }else{
                bedit.disable();
                bdinfo.disable();
                bdviewer.disable()
            }
        }else{
            bedit.disable();
            bdelete.disable();
            bdinfo.disable();
            bdviewer.disable();
            bdstatistic.disable();
        }
    }

});