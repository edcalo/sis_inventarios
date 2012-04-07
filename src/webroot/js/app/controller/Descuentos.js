Ext.define('SisInventarios.controller.Descuentos', {
    extend: 'Ext.app.Controller',
    stores: [
    'Descuentos'
    ],
    models: [
    'Descuento'
    ],
    views: [
    'descuento.List',
    'descuento.Add'
    ],
    requires:[
    'Ext.window.MessageBox',
    'Ext.tip.*'
    ],
    init: function() {
        this.control({
            'descuentolist button[action=adddescuento]': {
                click: this.addDescuento
            },
            'descuentolist button[action=editdescuento]': {
                click: this.editDescuento
            },
            'descuentolist #listadescuentos': {
                itemdblclick: this.editDescuento
            },
            'descuentolist button[action=deletedescuento]': {
                click: this.deleteDescuento
            },
            'descuentoadd button[action=save]': {
                click: this.saveDescuento
            }
        });
    },
    addDescuento: function(button){
        Ext.widget('descuentoadd');

    },
    viewDescuento:function(a, b, c){
        console.log('Ver detalle del descuento');
    },
    editDescuento: function(source, record){
        if(source.getXType() == 'button'){
            var win = source.up('window');
            record = win.down('#listadescuentos').getSelectionModel().getSelection();
            record = record[0];
        }
        var view = Ext.widget('descuentoadd');
        view.down('form').loadRecord(record);

    },
    deleteDescuento: function(button){
        Ext.MessageBox.confirm(
            'Eliminar Descuento',
            'Esta seguro que desea eliminar los descuentos seleccionados',
            function(confirm){
                if(confirm == 'yes'){
                    var win = button.up('window');
                    var seleccion = win.down('#listadescuentos').getSelectionModel().getSelection();
                    this.getDescuentosStore().remove(seleccion);
                    this.getDescuentosStore().sync();
                }
            },
            this
        );
    },
    saveDescuento: function(button){
        var win    = button.up('window');
        var form   = win.down('form');
        var record = form.getRecord();
        var values = form.getValues();
        if(!record){
            record = this.getDescuentoModel().create();
            record.set(values);
            this.getDescuentosStore().insert(0, record);
        }else{
            record.set(values);
        }
        
        win.close();
        this.getDescuentosStore().sync();


    }

});