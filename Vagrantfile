Vagrant.configure("2") do |config|
  config.vm.box = "hashicorp/bionic64"
  config.vm.network "private_network", ip: "192.168.33.10"
  config.vm.synced_folder "www/", "/var/www/html"
  config.vm.network "forwarded_port", guest: 1234, host: 1234
end