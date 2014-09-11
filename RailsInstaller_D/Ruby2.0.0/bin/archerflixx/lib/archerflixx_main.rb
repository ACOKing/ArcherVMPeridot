ovies = {
    "Fav" => "Karate Kid",
    "rating" => 4,
}
puts "Choose:"
choice = gets.chomp
case choice
when "add"
puts "Title:"
title = gets.chomp
puts "Rating:"
rating = gets.chomp
title = title.to_sym
rating =  rating.to_i
if movies[title.to_sym] == nil
    movies[title] = rating
     puts "Pair Added"
else
    puts "Error A1-0002: Aleady Exists"
end
when "update"
puts "Title:"
title = gets.chomp
if movies[title] == nil
    puts "Error A1-0001: Nonexistent Movie"
else
    puts "Rating:"
    movies[title] = gets.chomp
end
when "display"
movies.each do |movie, rating|
puts "#{movie}: #{rating}"
end
when "delete"
puts "title:"
title = gets.chomp
if movies[title] == nil
    puts "Error A1-0001: Nonexistent Movie"
else
    movies.delete(title)
end
else
 puts "Error!"
end
  