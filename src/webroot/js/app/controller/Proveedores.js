Ext.define('SisInventarios.controller.Proveedores', {
    extend: 'Ext.app.Controller',
    stores: [
    'Proveedores'
    ],
    models: [
    'Proveedor'
    ],
    views: [
    'proveedor.List',
    'proveedor.Add'
    ],
    requires:[
    'Ext.window.MessageBox',
    'Ext.tip.*'
    ],
    init: function() {
        this.control({
            'proveedoreslist button[action=addproveedor]': {
                click: this.addProveedor
            },
            'proveedoreslist button[action=editproveedor]': {
                click: this.editProveedor
            },
            'proveedoreslist #listaproveedores': {
                itemdblclick: this.editProveedor
            },
            'proveedoreslist button[action=deleteproveedor]': {
                click: this.deleteProveedor
            },
            'proveedoradd button[action=save]': {
                click: this.saveProveedor
            },
            'proveedoradd #contact': {
                click: function(){alert('hola');}
            }
        });
    },
    addProveedor: function(button){
        Ext.widget('proveedoradd');

    },
    viewProveedor:function(a, b, c){
        console.log('Ver detalle del proveedor');
    },
    editProveedor: function(source, record){
        if(source.getXType() == 'button'){
            var win = source.up('window');
            record = win.down('#listaproveedores').getSelectionModel().getSelection();
            record = record[0];
        }
        var view = Ext.widget('proveedoradd');
        view.down('form').loadRecord(record);

    },
    deleteProveedor: function(button){
        Ext.MessageBox.confirm(
            'Eliminar Proveedor',
            'Esta seguro que desea eliminar los proveedores seleccionados',
            function(confirm){
                if(confirm == 'yes'){
                    var win = button.up('window');
                    var seleccion = win.down('#listaproveedores').getSelectionModel().getSelection();
                    this.getProveedoresStore().remove(seleccion);
                    this.getProveedoresStore().sync();
                }
            },
            this
            );
    },
    saveProveedor: function(button){
        var win    = button.up('window');
        var form   = win.down('form');
        if(form.getForm().isValid()){
            var record = form.getRecord();
            var values = form.getValues();
            if(!record){
                record = this.getProveedorModel().create();
                record.set(values);
                this.getProveedoresStore().insert(0, record);
            }else{
                record.set(values);
            }
        
            win.close();
            this.getProveedoresStore().sync();
        }


    }

});