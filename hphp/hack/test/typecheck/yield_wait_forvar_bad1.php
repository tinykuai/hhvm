<?hh
/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the "hack" directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 *
 */

class A {}

function getA(): A {
  return new A();
}

async function f() {
  list($x) = await gen_array_va_rec_DEPRECATED(
    getA(),
  );
}
