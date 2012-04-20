Ext.define('SisInventarios.controller.Compras', {
    extend: 'Ext.app.Controller',
    stores: [
    'Compras'
    ],
    models: [
    'Compra'
    ],
    views: [
    'compra.List',
    'compra.Add'    
    ],
    requires:[
    'Ext.window.MessageBox',
    'Ext.tip.*'
    ],
    init: function() {
        this.control({
            'compralist button[action=addcompra]': {
                click: this.addCompra
            },
            'compralist button[action=editcompra]': {
                click: this.editCompra
            },
            'compralist #listacompras': {
                itemdblclick: this.editCompra
            },
            'compralist button[action=deletecompra]': {
                click: this.deleteCompra
            },
            'compraadd button[action=save]': {
                click: this.saveCompra
            }
        });
    },
    addCompra: function(button){
        Ext.widget('compraadd');

    },
    viewRol:function(a, b, c){
        console.log('Ver detalle del grupo');
    },
    editCompra: function(source, record){
        if(source.getXType() == 'button'){
            var win = source.up('window');
            record = win.down('#listacompras').getSelectionModel().getSelection();
            record = record[0];
        }
        var view = Ext.widget('compraadd');
        view.down('form').loadRecord(record);

    },
    deleteCompra: function(button){
        Ext.MessageBox.confirm(
            'Eliminar Compra',
            'Esta seguro que desea eliminar los Compras seleccionados',
            function(confirm){
                if(confirm == 'yes'){
                    var win = button.up('window');
                    var seleccion = win.down('#listacompras').getSelectionModel().getSelection();
                    this.getComprasStore().remove(seleccion);
                    this.getComprasStore().sync();
                }
            },
            this
        );
    },
    saveCompra: function(button){
        var win    = button.up('window');
        var form   = win.down('form');
        var record = form.getRecord();
        var values = form.getValues();
        if(!record){
            record = this.getCompraModel().create();
            record.set(values);
            this.getComprasStore().insert(0, record);
        }else{
            record.set(values);
        }        
        win.close();
        this.getComprasStore().sync();
    }

});