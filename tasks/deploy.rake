require 'statistrano'

define_server "production" do
  set :remote, 'digitalocean'
  set :project_root, "/var/www/mailchimp.com"
  set :git_check_branch, "master"
end