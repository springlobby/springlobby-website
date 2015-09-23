#!/bin/sh
for file in *.png
do
  convert -thumbnail 150 -strip "$file" thumbs/"$file"
done
