Ext.define('SisInventarios.controller.Empleados', {
    extend: 'Ext.app.Controller',
    stores: [
    'Empleados'
    ],
    models: [
    'Empleado'
    ],
    views: [
    'empleado.List',
    'empleado.Add',
    'empleado.Selector'
    ],
    requires:[
    'Ext.window.MessageBox',
    'Ext.tip.*'
    ],
    init: function() {
        this.control({
            'empleadolist button[action=addempleado]': {
                click: this.addEmpleado
            },
            'empleadolist button[action=editempleado]': {
                click: this.editEmpleado
            },
            'empleadolist #listaempleados': {
                itemdblclick: this.editEmpleado
            },
            'empleadolist button[action=deleteempleado]': {
                click: this.deleteEmpleado
            },
            'empleadoadd button[action=save]': {
                click: this.saveEmpleado
            }
        });
    },
    addEmpleado: function(button){
        Ext.widget('empleadoadd');

    },
    viewEmpleado:function(a, b, c){
        console.log('Ver detalle del grupo');
    },
    editEmpleado: function(source, record){
        if(source.getXType() == 'button'){
            var win = source.up('window');
            record = win.down('#listaempleados').getSelectionModel().getSelection();
            record = record[0];
        }
        var view = Ext.widget('empleadoadd');
        view.down('form').loadRecord(record);

    },
    deleteEmpleado: function(button){
        Ext.MessageBox.confirm(
            'Eliminar Empleado',
            'Esta seguro que desea eliminar los empleados seleccionados',
            function(confirm){
                if(confirm == 'yes'){
                    var win = button.up('window');
                    var seleccion = win.down('#listaempleados').getSelectionModel().getSelection();
                    this.getEmpleadosStore().remove(seleccion);
                    this.getEmpleadosStore().sync();
                }
            },
            this
        );
    },
    saveEmpleado: function(button){
        var win    = button.up('window');
        var form   = win.down('form');
        var record = form.getRecord();
        var values = form.getValues();
        if(!record){
            record = this.getEmpleadoModel().create();
            record.set(values);
            this.getEmpleadosStore().insert(0, record);
        }else{
            record.set(values);
        }
        
        win.close();
        this.getEmpleadosStore().sync();


    }

});