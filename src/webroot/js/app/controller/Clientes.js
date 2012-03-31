Ext.define('SisInventarios.controller.Clientes', {
    extend: 'Ext.app.Controller',
    stores: [
    'Clientes'
    ],
    models: [
    'Cliente'
    ],
    views: [
    'cliente.List',
    'cliente.Add'
    ],
    requires:[
    'Ext.window.MessageBox',
    'Ext.tip.*'
    ],
    init: function() {
        this.control({
            'clientelist button[action=addcliente]': {
                click: this.addCliente
            },
            'clientelist button[action=editcliente]': {
                click: this.editCliente
            },
            'clientelist #listaclientes': {
                itemdblclick: this.editCliente
            },
            'clientelist button[action=deletecliente]': {
                click: this.deleteCliente
            },
            'clienteadd button[action=save]': {
                click: this.saveCliente
            }
        });
    },
    addCliente: function(button){
        Ext.widget('clienteadd');

    },
    viewRol:function(a, b, c){
        console.log('Ver detalle del grupo');
    },
    editCliente: function(source, record){
        if(source.getXType() == 'button'){
            var win = source.up('window');
            record = win.down('#listaclientes').getSelectionModel().getSelection();
            record = record[0];
        }
        var view = Ext.widget('clienteadd');
        view.down('form').loadRecord(record);

    },
    deleteCliente: function(button){
        Ext.MessageBox.confirm(
            'Eliminar Cliente',
            'Esta seguro que desea eliminar los clientes seleccionados',
            function(confirm){
                if(confirm == 'yes'){
                    var win = button.up('window');
                    var seleccion = win.down('#listaclientes').getSelectionModel().getSelection();
                    this.getClientesStore().remove(seleccion);
                    this.getclientesStore().sync();
                }
            },
            this
        );
    },
    saveCliente: function(button){
        var win    = button.up('window');
        var form   = win.down('form');
        var record = form.getRecord();
        var values = form.getValues();
        if(!record){
            record = this.getClienteModel().create();
            record.set(values);
            this.getClientesStore().insert(0, record);
        }else{
            record.set(values);
        }
        
        win.close();
        this.getClientesStore().sync();
    }

});