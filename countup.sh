#!/bin/sh

for i in `seq 1000 9999`
do
 if [ `./soinsu.php -q -v $i` = 't' ] ; then
  echo $i
 fi
done
