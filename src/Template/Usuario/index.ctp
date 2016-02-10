
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Usuarios</h3>
                  <!--<div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      <input name="table_search" class="form-control input-sm pull-right" placeholder="Search" type="text">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>-->
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody><tr>
                      <th>ID</th>
                      <th>NOMBRE</th>
                      <th>CEDULA</th>
                      <th>TIPO</th>
                      <th>ACCION</th>
                    </tr>
                    <?php foreach ($usuario as $usuario): ?>
                    <tr>
                        <td><?= $this->Number->format($usuario->idusuario) ?></td>
                        <td><?= h($usuario->nombre) ?></td>
                        <td><?= $this->Number->format($usuario->cedula) ?></td>
                        <td><?= h($usuario->tipo) ?></td>
                        <td class="actions">
                            <?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-pencil']). " Editar", ['action' => 'edit', $usuario->idusuario],['escape'=>false]) ?>
                            <?= $this->Form->postLink($this->Html->tag('i', '', ['class' => 'fa fa-trash']). " Delete", ['action' => 'delete', $usuario->idusuario], ['escape'=>false],['confirm' => __('Are you sure you want to delete # {0}?', $usuario->idusuario)]) ?>

                        </td>

                        <!-- Single button -->

                    </tr>
                    <?php endforeach; ?>
                  </tbody></table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                  </ul>
                </div>
              </div><!-- /.box -->



    </div>
</div>
