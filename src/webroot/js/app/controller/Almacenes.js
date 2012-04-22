Ext.define('SisInventarios.controller.Almacenes', {
    extend: 'Ext.app.Controller',
    stores: [
    'Almacenes'
    ],
    models: [
    'Almacen'
    ],
    views: [
    'almacen.List',
    'almacen.Add',
    'almacen.Selector'
    ],
    requires:[
    'Ext.window.MessageBox',
    'Ext.tip.*'
    ],
    init: function() {
        this.control({
            'almacenlist button[action=addalmacen]': {
                click: this.addAlmacen
            },
            'almacenlist button[action=editalmacen]': {
                click: this.editAlmacen
            },
            'almacenlist #listaalmacenes': {
                itemdblclick: this.editAlmacen
            },
            'almacenlist button[action=deletealmacen]': {
                click: this.deleteAlmacen
            },
            'almacenadd button[action=save]': {
                click: this.saveAlmacen
            }
        });
    },
    addAlmacen: function(button){
        Ext.widget('almacenadd');

    },
    viewRol:function(a, b, c){
        console.log('Ver detalle del grupo');
    },
    editAlmacen: function(source, record){
        if(source.getXType() == 'button'){
            var win = source.up('window');
            record = win.down('#listaalmacenes').getSelectionModel().getSelection();
            record = record[0];
        }
        var view = Ext.widget('almacenadd');
        view.down('form').loadRecord(record);

    },
    deleteAlmacen: function(button){
        Ext.MessageBox.confirm(
            'Eliminar Almacen',
            'Esta seguro que desea eliminar los almacenes seleccionados',
            function(confirm){
                if(confirm == 'yes'){
                    var win = button.up('window');
                    var seleccion = win.down('#listaalmacenes').getSelectionModel().getSelection();
                    this.getAlmacenesStore().remove(seleccion);
                    this.getAlmacenesStore().sync();
                }
            },
            this
        );
    },
    saveAlmacen: function(button){
        var win    = button.up('window');
        var form   = win.down('form');
        var record = form.getRecord();
        var values = form.getValues();
        if(!record){
            record = this.getAlmacenModel().create();
            record.set(values);
            this.getAlmacenesStore().insert(0, record);
        }else{
            record.set(values);
        }
        
        win.close();
        this.getAlmacenesStore().sync();


    }

});