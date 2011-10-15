<?php

function fib( $n ) {
  // PRE: $n >= 0
  if( $n < 2 ) {
    return $n;
  } else {
    return fib( $n-1 ) + fib( $n-2 );
  }
} 

for( $i=0; $i<20; $i++ ) {   
  echo fib( $i )." - ";
} 