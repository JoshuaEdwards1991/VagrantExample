# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure(2) do |config|
  #This speeds up subsequent provisions by creating an apt-cache on the host
  if Vagrant.has_plugin?("vagrant-cachier")
    config.cache.scope = :box
  end
  config.vm.define "web" do |web|
    config.vm.provider :virtualbox do |v|
      v.memory = 2048
      v.cpus = 4
    end
    web.vm.box = "ubuntu/trusty64"
    web.vm.network "forwarded_port", guest: 80, host: 8080

    web.vm.synced_folder "src", "/var/www"
    web.vm.synced_folder "logs", "/var/log/apache2"

    web.vm.provision :puppet do |puppet|
      puppet.manifests_path = "manifests"
      puppet.manifest_file = "default.pp"
    end

    web.vm.provision "shell", inline: <<-SHELL
       echo "Hello from vagrant leek"
       rm /var/www/html/index.html
    SHELL
  end

  config.vm.define "db" do |db|
    config.vm.provider :virtualbox do |v|
      v.memory = 2048
      v.cpus = 4
    end
    db.vm.box = "ubuntu/trusty64"
    db.vm.network "forwarded_port", guest: 3306, host: 3306

    db.vm.synced_folder "sql", "/sql"



    db.vm.provision :shell, path: 'scripts/install.sh'

  end

end
