<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li class="menu-title">
					<span>Menu</span>
				</li>
				<li>
					<a href="#"> <span>Dashboard</span></a>
				</li>

				<li>

				</li>
				<li><a href=""> <span>Suivis</span></a></li>
				<li class="submenu">
					<a href="#"> <span> Comptes créés</span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="{{ route('back.clients.index') }}">Liste</a></li>
					</ul>
				</li>
				<li class="submenu">
					<a href="#"><span> Suivis</span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="{{ route('back.clients.index') }}">Liste</a></li>
					</ul>
				</li>
			</ul>
		</div>
    </div>
</div>
