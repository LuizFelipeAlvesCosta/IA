    <ul class="sidebar-menu">

        <li class="treeview">
            <a href="#">
                <i class="fa fa-user"></i> <span>Usuários</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                 <li>
                    <?= $this->Html->link(__('Gerenciar Usuário'),
                    ['controller' => 'Users', 'action' => 'index']) ?>
                 </li>
            </ul>
        </li>

    </ul>