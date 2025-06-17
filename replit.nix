{ pkgs }: {
	deps = [
		pkgs.php
		pkgs.phpPackages.pdo
		pkgs.phpPackages.pdo_mysql
	];
}