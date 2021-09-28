<?php
/* -------Fileperms-------*/
echo fileperms("readme.txt") . "<br><br>";

echo decoct(fileperms("readme.txt")) . "<br><br>";

echo substr(decoct(fileperms("readme.txt")), 2) . "<br><br>";

/* -------On SERVER-------*/
if (is_readable("readme.txt")) {
  echo "Yes it is Readable.";
} else {
  echo "No it is not Readable.";
}

/* -------Read and write for owner, nothing for everybody else-------*/
chmod("readme.txt", 0600);

/* -------Read and write for owner, read for everybody else-------*/
chmod("readme.txt", 0644);

/* -------Everything for owner, read and execute for everybody else-------*/
chmod("readme.txt", 0755);

/* -------Everything for owner, read for owner's group-------*/
chmod("readme.txt", 0740);
