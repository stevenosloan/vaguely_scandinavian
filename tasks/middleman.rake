desc "the middleman related tasks"
namespace :middleman do

  desc "kickoff the preview server"
  task :server do
    system "bundle exec middleman server"
  end

  desc "build the stuff"
  task :build do
    require 'benchmark'
    time = Benchmark.realtime do
      system "bundle exec middleman build --clean"
    end
    puts "\n\n-----------------------------------\n\n"
    puts "built in #{time}"
    puts "\n\n-----------------------------------\n\n"
  end

end