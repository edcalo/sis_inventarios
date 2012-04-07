//alert("anter del list");
Ext.define('SisInventarios.view.empleado.List' ,{
    extend: 'Ext.window.Window',
    alias : 'widget.empleadolist',
    layout: 'fit',
    autoShow: true,
    modal:true,
    width: 650,
    height: 415,
    title: 'Lista de Empleados',
    initComponent: function() {
       // alert("aqui");        
        var sm = Ext.create('Ext.selection.CheckboxModel',{
            listeners:{
                'selectionchange': this.selectChange,
                scope: this
            }
        });

        this.items=[{
            id:'listaempleados',
            xtype: 'grid',
            border: false,
            store: 'Empleados',
            columns : [{
                header: 'Nombre',
                dataIndex: 'nombres',
                renderer:function(value, metaData){
                    metaData.style = 'font-size:120%; font-weight: bold';
                    return value;
                },
                width:120
            },{
                header: 'Apellido Paterno',
                dataIndex: 'apellido_paterno',
                renderer:function(value, metaData){
                    metaData.style = 'white-space:normal';
                    return value;
                },
                width: 380
            },
            {
                header: 'Apellido Materno',
                dataIndex: 'apellido_materno',
                renderer:function(value, metaData){
                    metaData.style = 'white-space:normal';
                    return value;
                },
                width: 380
            },
            {
                header: 'Documento Identidad',
                dataIndex: 'doc_identidad',
                renderer:function(value, metaData){
                    metaData.style = 'white-space:normal';
                    return value;
                },
                width: 380
            },
            {
                header: 'Fecha Ingreso',
                dataIndex: 'fecha_ingreso',
                renderer:function(value, metaData){
                    metaData.style = 'white-space:normal';
                    return value;
                },
                width: 380
            },
            {
                header: 'Contacto',
                dataIndex: 'contacto',
                renderer:function(value, metaData){
                    metaData.style = 'white-space:normal';
                    return value;
                },
                width: 380
            },
            {
                header: 'Telefono',
                dataIndex: 'telefono',
                renderer:function(value, metaData){
                    metaData.style = 'white-space:normal';
                    return value;
                },
                width: 380
            },
            {
                header: 'email',
                dataIndex: 'email',
                renderer:function(value, metaData){
                    metaData.style = 'white-space:normal';
                    return value;
                },
                width: 380
            },
            {
                header: 'Tipo Documento',
                dataIndex: 'tipo_doc_identidad',
                renderer:function(value, metaData){
                    metaData.style = 'white-space:normal';
                    return value;
                },
                width: 380
            }],
            selModel: sm,
            bbar:Ext.create('Ext.PagingToolbar', {
                store: Ext.data.StoreManager.lookup('Empleados'),
                displayInfo: true,
                displayMsg: 'Mostrando {0} - {1} empleados de  {2}',
                emptyMsg: "No hay empleados registrados"
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
                    action: 'addempleado',
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
                    action: 'editempleado',
                    disabled:true
                },{
                    text: 'Eliminar',
                    iconCls:'icon-delete-server',
                    action:'deleteempleado',
                    disabled:true
                }]
            }]
        }];
        this.callParent(arguments);
    },
    selectChange: function( sm, selected, options ){
        var bedit = this.down('button[action=editempleado]');
        var bdelete = this.down('button[action=deleteempleado]');
        
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