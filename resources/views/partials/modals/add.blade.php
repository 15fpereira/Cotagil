<!-- Modal -->
<div class="modal fade" id="addprodutos" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
                <h4 class="classic-title"><span class="fa fa-users"></span> <strong>cotágil</strong></h4>
            </div>
            <div class="modal-body">
                @include('produtos.listagem')
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn-system btn-small border-btn pull-left" data-dismiss="modal"><span class="fa fa-times"></span> Cancelar</button>
                <!--<a href="#" class="btn-system btn-small border-btn">Button</a>-->
                <p>Não é um membro? <a href="#">Solicite aqui!</a></p>
                <p>Esqueceu <a href="#">senha?</a></p>
            </div>
        </div>

    </div>
</div>