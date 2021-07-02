#!/bin/bash
declare -a dirs
COM=$@

pathToProject=~/public_html/symfonySimpleSite/

cd "${pathToProject}"

eval $COM

cd "${pathToProject}/bundles"

i=1

for f in *;
do
  if [ -d "$f" ]; then
    dirs[i++]="$f"
  fi
done

for dir in "${dirs[@]}"
do
  cd "${pathToProject}/bundles/${dir}"
  pwd
  eval $COM
done
