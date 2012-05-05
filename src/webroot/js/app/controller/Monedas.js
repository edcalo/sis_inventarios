Ext.define('SisInventarios.controller.Monedas', {
    extend: 'Ext.app.Controller',
    stores: [
    'Monedas'
    ],
    models: [
    'Moneda'
    ],
    views: [
    'moneda.List',
    'moneda.Add',
    'moneda.Selector'
    ],
    requires:[
    'Ext.window.MessageBox',
    'Ext.tip.*'
    ],
    init: function() {
        this.control({
            'monedaslist button[action=addmoneda]': {
                click: this.addMoneda
            },
            'monedaslist button[action=editmoneda]': {
                click: this.editMoneda
            },
            'monedaslist #listamonedas': {
                itemdblclick: this.editMoneda
            },
            'monedaslist button[action=deletemoneda]': {
                click: this.deleteMoneda
            },
            'monedasadd button[action=save]': {
                click: this.saveMoneda
            }
        });
    },
    addMoneda: function(button){
        Ext.widget('monedasadd');

    },
    editMoneda: function(source, record){
        if(source.getXType() == 'button'){
            var win = source.up('monedaslist');
            record = win.down('#listamonedas').getSelectionModel().getSelection();
            record = record[0];
        }
        var view = Ext.widget('monedasadd');
        view.down('form').loadRecord(record);

    },
    deleteMoneda: function(button){
        Ext.MessageBox.confirm(
            'Eliminar Moneda',
            'Esta seguro que desea eliminar los Monedas seleccionados',
            function(confirm){
                if(confirm == 'yes'){
                    var panel = button.up('monedaslist');
                    var seleccion = panel.down('#listamonedas').getSelectionModel().getSelection()[0];
                    this.getMonedasStore().remove(seleccion);
                    this.getMonedasStore().sync();
                }
            },
            this
        );
    },
    saveMoneda: function(button){
        var win    = button.up('window');
        var form   = win.down('form');
        var record = form.getRecord();
        var values = form.getValues();
        if(!record){
            record = this.getMonedaModel().create();
            record.set(values);
            this.getMonedasStore().insert(0, record);
        }else{
            record.set(values);
        }        
        win.close();
        this.getMonedasStore().sync();
    }

});