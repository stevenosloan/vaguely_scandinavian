source "http://rubygems.org"
ruby "2.0.0"

# utility
gem "rake"
gem "colorize"

## middleman
gem "middleman", "~> 3.0.12"
gem "middleman-livereload"
gem "middleman-syntax"

## rendering engines
gem "haml", "~> 3"
gem "sass"
gem "redcarpet"
gem "nokogiri"

## runtime env
gem "therubyracer"

## deploy
gem "statistrano", :git => 'git@github.com:mailchimp/statistrano.git'

group :development do
  gem "thin"
  gem "foreman"
  gem "rack"
  gem "rack-legacy"
  gem "pry-debugger"
  gem "awesome_print"
  gem "yard"
end

group :test do
  gem "rspec"
  gem "autotest"
end