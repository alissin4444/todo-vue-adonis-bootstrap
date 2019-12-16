<!-- ADD CATEGORIA -->
<div id="add-categoria" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Adicionar categoria</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body p-4">
                <div v-if="modals.categoria.validate.display">
                    <p class="text-danger">{{modals.categoria.validate.content}}</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="titulo_categoria" class="control-label">Título</label>
                            <input v-model="modals.categoria.titulo" type="text" class="form-control" id="titulo_categoria" placeholder="Digite seu título">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group no-margin">
                            <label for="descricao_categoria" class="control-label">Descrição</label>
                            <textarea v-model="modals.categoria.descricao" class="form-control" id="descricao_categoria" placeholder="Digite sua descrição"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">CANCELAR</button>
                <button @click="adicionar_categoria" type="button" class="btn btn-info waves-effect waves-light">ADICIONAR</button>
            </div>
        </div>
    </div>
</div><!-- /.modal -->


<!-- ADD TODO -->
<div id="add-todo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Adicionar TODO</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body p-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group" id="vue-categorias">
                            <label for="categoria_todo" class="control-label">Categoria</label>
                            <select data-size="5" id="modals_categorias_select" class="selectpicker form-control" data-max-option="5" data-live-search="true" data-style="btn-light">
                                <option v-for="categoria in datas.categorias">{{categoria.titulo}}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-3" class="control-label">Título</label>
                            <input type="text" class="form-control" id="field-3" placeholder="Address">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">CANCELAR</button>
                <button type="button" class="btn btn-info waves-effect waves-light">ADICIONAR</button>
            </div>
        </div>
    </div>
</div><!-- /.modal -->

