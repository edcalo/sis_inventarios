Ext.define('SisInventarios.controller.Grupos', {
    extend: 'Ext.app.Controller',
    stores: [
    'Grupos'
    ],
    models: [
    'Grupo'
    ],
    views: [
    'grupo.List',
    'grupo.Add',
    ],
    requires:[
    'Ext.window.MessageBox',
    'Ext.tip.*'
    ],
    seletedGroupId: 1,
    init: function() {
        this.control({
            'gruposlist button[action=addgrupo]': {
                click: this.addGrupo
            },
            'gruposlist button[action=editgrupo]': {
                click: this.editGrupo
            },
            'gruposlist #listagrupos': {
                itemdblclick: this.editGrupo
            },
            'gruposlist button[action=deletegrupo]': {
                click: this.deleteGrupo
            },
            'gruposadd button[action=save]': {
                click: this.saveGrupo
            },
            'gruposlist #tree':{
                itemclick: function(view, record, item, index, e, eOpts ){
                    this.seletedGroupId = record.get('id')
                    view.up('gruposlist').down('#listagrupos').setTitle('Subgrupos de ' + record.get('text'))
                    this.getGruposStore().load({
                        params:{grupo: this.seletedGroupId}
                    });
                }
                
            }
        });
    },
    addGrupo: function(button){
        Ext.widget('gruposadd');

    },
    viewGrupo:function(a, b, c){
        console.log('Ver detalle del proveedor');
    },
    editGrupo: function(source, record){
        if(source.getXType() == 'button'){
            var win = source.up('window');
            record = win.down('#listagrupos').getSelectionModel().getSelection();
            record = record[0];
        }
        var view = Ext.widget('gruposadd');
        view.down('form').loadRecord(record);

    },
    deleteGrupo: function(button){
        Ext.MessageBox.confirm(
            'Eliminar Grupo',
            'Esta seguro que desea eliminar los proveedores seleccionados',
            function(confirm){
                if(confirm == 'yes'){
                    var win = button.up('window');
                    var seleccion = win.down('#listagrupos').getSelectionModel().getSelection();
                    this.getGruposStore().remove(seleccion);
                    this.getGruposStore().sync();
                }
            },
            this
        );
    },
    saveGrupo: function(button){
        var win    = button.up('window');
        var form   = win.down('form');
        var record = form.getRecord();
        var values = form.getValues();
        if(!record){
            record = this.getGrupoModel().create();
            values.padre_id = this.seletedGroupId
            record.set(values);
            this.getGruposStore().insert(0, record);
        }else{
            record.set(values);
        }
        
        win.close();
        this.getGruposStore().sync();


    }

});