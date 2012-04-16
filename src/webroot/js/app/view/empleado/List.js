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
    iconCls:'icon-employee-16x16',
    initComponent: function() {       
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
                header: 'Doc. Identidad',
                dataIndex: 'doc_identidad',
                renderer:function(value, metaData, record){
                    return record.get('tipo_doc_identidad') + ' ' + value;
                },
                width: 120
            },{
                header: 'Nombre',
                dataIndex: 'nombres',
                renderer:function(value, metaData){
                    metaData.style = 'font-size:120%; font-weight: bold';
                    return value;
                },
                width:120
            },{
                header: 'Apellidos',
                dataIndex: 'apellido_paterno',
                renderer:function(value, metaData, record){
                    return value + ' ' + record.get('apellido_materno');
                },
                width: 150
            },{
                header: 'Fecha Ingreso',
                dataIndex: 'fecha_ingreso',
                width: 80
            },
            {
                header: 'Contacto',
                dataIndex: 'contacto',
                width: 100
            },
            {
                header: 'Telefono',
                dataIndex: 'telefono',
                width: 80
            },
            {
                header: 'email',
                dataIndex: 'email',
                width: 100
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
                    action: 'editempleado',
                    disabled:true
                },{
                    text: 'Eliminar',
                    iconCls:'icon-delete-32x32',
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