Ext.define('SisInventarios.controller.Dosificaciones', {
    extend: 'Ext.app.Controller',
    stores: [
    'Dosificaciones'
    ],
    models: [
    'Dosificacion'
    ],
    views: [
    'dosificacion.List',
    'dosificacion.Add'
    ],
    requires:[
    'Ext.window.MessageBox',
    'Ext.tip.*'
    ],
    init: function() {
        this.control({
            'dosificacionlist button[action=adddosificacion]': {
                click: this.addDosificacion
            },
            'dosificacionlist button[action=editdosificacion]': {
                click: this.editDosificacion
            },
            'dosificacionlist #listadosificaciones': {
                itemdblclick: this.editDosificacion
            },
            'dosificacionlist button[action=deletedosificacion]': {
                click: this.deleteDosificacion
            },
            'dosificacionadd button[action=save]': {
                click: this.saveDosificacion
            }
        });
    },
    addDosificacion: function(button){
        Ext.widget('dosificacionadd');

    },
    viewDosificacion:function(a, b, c){
        console.log('Ver detalle del grupo');
    },
    editDosificacion: function(source, record){
        if(source.getXType() == 'button'){
            var win = source.up('window');
            record = win.down('#listadosificaciones').getSelectionModel().getSelection();
            record = record[0];
        }
        var view = Ext.widget('dosificacionadd');
        view.down('form').loadRecord(record);

    },
    deleteDosificacion: function(button){
        Ext.MessageBox.confirm(
            'Eliminar Dosificacion',
            'Esta seguro que desea eliminar las dosificaciones seleccionados',
            function(confirm){
                if(confirm == 'yes'){
                    var win = button.up('window');
                    var seleccion = win.down('#listadosificaciones').getSelectionModel().getSelection();
                    this.getDosificacionStore().remove(seleccion);
                    this.getDosificacionStore().sync();
                }
            },
            this
        );
    },
    saveDosificacion: function(button){
        var win    = button.up('window');
        var form   = win.down('form');
        var record = form.getRecord();
        var values = form.getValues();
        if(!record){
            record = this.getDosificacionModel().create();
            record.set(values);
            this.getDosificacionStore().insert(0, record);
        }else{
            record.set(values);
        }
        
        win.close();
        this.getDosificacionStore().sync();


    }

});