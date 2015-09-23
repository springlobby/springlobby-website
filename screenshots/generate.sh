for file in *.png
do
  convert -resize 150 "$file" thumbs/"$file"
done
