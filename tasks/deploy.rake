require 'statistrano'

define_server "production" do
  set :remote, 'digitalocean'
  set :project_root, "/var/www/vaguelyscandinavian.com"
  set :git_check_branch, "master"
end