<?php

use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;

return [
    ['3+4i', 3, 4],
    ['3+4j', 3, 4, 'j'],
    ['12.34+5.67j', 12.34, 5.6699999999999999, 'j'],
    [ExcelError::VALUE(), 3.5, 'NaN'],
    [ExcelError::VALUE(), 'NaN', 3.5],
    [ExcelError::VALUE(), 1.5, 3.5, 'invalid suffix'],
    [ExcelError::VALUE(), 3.5, true],
    [ExcelError::VALUE(), true, 3.5],
    [ExcelError::VALUE(), 1.5, 3.5, true],
    ['1.234E-5+6780000000i', 1.234E-5, 6780000000.0],
    ['123400+6.78E-9i', 123400.0, 6.78E-9],
    ['3.5+2.5i', 3.5, 2.5],
    ['3.5+i', 3.5, 1],
    ['3.5-i', 3.5, -1],
    ['3.5-2.5i', 3.5, -2.5],
    ['1+2.5i', 1, 2.5],
    ['1+i', 1, 1],
    ['1', 1, 0],
    ['1-i', 1, -1],
    ['1-2.5i', 1, -2.5],
    ['2.5i', 0, 2.5],
    ['i', 0, 1],
    ['0.0', 0, 0],
    ['-i', 0, -1],
    ['-2.5i', 0, -2.5],
    ['-1+2.5i', -1, 2.5],
    ['-1+i', -1, 1],
    ['-1', -1, 0],
    ['-1-i', -1, -1],
    ['-1-2.5i', -1, -2.5],
    ['-3.5', -3.5, 0],
    ['-3.5-2.5i', -3.5, -2.5],
    ['-2.5-2.5i', -2.5, -2.5],
    ['-2.5-2.5i', -2.5, -2.5],
    ['-1.5-2.5i', -1.5, -2.5],
    ['-1.5-2.5i', -1.5, -2.5],
    ['-0.5-2.5i', -0.5, -2.5],
    ['-2.5i', 0, -2.5],
    ['0.5-2.5i', 0.5, -2.5],
    ['1-2.5i', 1, -2.5],
    ['1.5-2.5i', 1.5, -2.5],
    ['2-2.5i', 2, -2.5],
    ['2.5-2.5i', 2.5, -2.5],
    ['3-2.5i', 3, -2.5],
    ['3.5-2.5i', 3.5, -2.5],
    ['-2.5-2.5i', -2.5, -2.5],
    ['-1.5-2.5i', -1.5, -2.5],
    ['-0.5-2.5i', -0.5, -2.5],
    ['-2.5i', 0, -2.5],
    ['0.5-2.5i', 0.5, -2.5],
    ['1-2.5i', 1, -2.5],
    ['1.5-2.5i', 1.5, -2.5],
    ['2-2.5i', 2, -2.5],
    ['2.5-2.5i', 2.5, -2.5],
    ['3-2.5i', 3, -2.5],
    ['3.5-2.5i', 3.5, -2.5],
    ['-2.5-1.5i', -2.5, -1.5],
    ['-1.5-1.5i', -1.5, -1.5],
    ['-0.5-1.5i', -0.5, -1.5],
    ['-1.5i', 0, -1.5],
    ['0.5-1.5i', 0.5, -1.5],
    ['1-1.5i', 1, -1.5],
    ['1.5-1.5i', 1.5, -1.5],
    ['2-1.5i', 2, -1.5],
    ['2.5-1.5i', 2.5, -1.5],
    ['3-1.5i', 3, -1.5],
    ['3.5-1.5i', 3.5, -1.5],
    ['-2.5-1.5i', -2.5, -1.5],
    ['-1.5-1.5i', -1.5, -1.5],
    ['-0.5-1.5i', -0.5, -1.5],
    ['-1.5i', 0, -1.5],
    ['0.5-1.5i', 0.5, -1.5],
    ['1-1.5i', 1, -1.5],
    ['1.5-1.5i', 1.5, -1.5],
    ['2-1.5i', 2, -1.5],
    ['2.5-1.5i', 2.5, -1.5],
    ['3-1.5i', 3, -1.5],
    ['3.5-1.5i', 3.5, -1.5],
    ['-2.5-0.5i', -2.5, -0.5],
    ['-1.5-0.5i', -1.5, -0.5],
    ['-0.5-0.5i', -0.5, -0.5],
    ['-0.5i', 0, -0.5],
    ['0.5-0.5i', 0.5, -0.5],
    ['1-0.5i', 1, -0.5],
    ['1.5-0.5i', 1.5, -0.5],
    ['2-0.5i', 2, -0.5],
    ['2.5-0.5i', 2.5, -0.5],
    ['3-0.5i', 3, -0.5],
    ['3.5-0.5i', 3.5, -0.5],
    ['-2.5', -2.5, 0],
    ['-1.5', -1.5, 0],
    ['-0.5', -0.5, 0],
    ['0.0', 0, 0],
    ['0.5', 0.5, 0],
    ['1', 1, 0],
    ['1.5', 1.5, 0],
    ['2', 2, 0],
    ['2.5', 2.5, 0],
    ['3', 3, 0],
    ['3.5', 3.5, 0],
    ['-2.5+0.5i', -2.5, 0.5],
    ['-1.5+0.5i', -1.5, 0.5],
    ['-0.5+0.5i', -0.5, 0.5],
    ['0.5i', 0, 0.5],
    ['0.5+0.5i', 0.5, 0.5],
    ['1+0.5i', 1, 0.5],
    ['1.5+0.5i', 1.5, 0.5],
    ['2+0.5i', 2, 0.5],
    ['2.5+0.5i', 2.5, 0.5],
    ['3+0.5i', 3, 0.5],
    ['3.5+0.5i', 3.5, 0.5],
    ['-2.5+i', -2.5, 1],
    ['-2.5+i', -2.5, 1],
    ['-1.5+i', -1.5, 1],
    ['-1.5+i', -1.5, 1],
    ['-0.5+i', -0.5, 1],
    ['i', 0, 1],
    ['0.5+i', 0.5, 1],
    ['1+i', 1, 1],
    ['1.5+i', 1.5, 1],
    ['2+i', 2, 1],
    ['2.5+i', 2.5, 1],
    ['3+i', 3, 1],
    ['3.5+i', 3.5, 1],
    ['-2.5+1.5i', -2.5, 1.5],
    ['-2.5+1.5i', -2.5, 1.5],
    ['-1.5+1.5i', -1.5, 1.5],
    ['-1.5+1.5i', -1.5, 1.5],
    ['-0.5+1.5i', -0.5, 1.5],
    ['1.5i', 0, 1.5],
    ['0.5+1.5i', 0.5, 1.5],
    ['1+1.5i', 1, 1.5],
    ['1.5+1.5i', 1.5, 1.5],
    ['2+1.5i', 2, 1.5],
    ['2.5+1.5i', 2.5, 1.5],
    ['3+1.5i', 3, 1.5],
    ['3.5+1.5i', 3.5, 1.5],
    ['-2.5+2i', -2.5, 2],
    ['-2.5+2i', -2.5, 2],
    ['-1.5+2i', -1.5, 2],
    ['-1.5+2i', -1.5, 2],
    ['-0.5+2i', -0.5, 2],
    ['2i', 0, 2],
    ['0.5+2i', 0.5, 2],
    ['1+2i', 1, 2],
    ['1.5+2i', 1.5, 2],
    ['2+2i', 2, 2],
    ['2.5+2i', 2.5, 2],
    ['3+2i', 3, 2],
    ['3.5+2i', 3.5, 2],
    ['-2.5+2.5i', -2.5, 2.5],
    ['-2.5+2.5i', -2.5, 2.5],
    ['-1.5+2.5i', -1.5, 2.5],
    ['-1.5+2.5i', -1.5, 2.5],
    ['-0.5+2.5i', -0.5, 2.5],
    ['2.5i', 0, 2.5],
    ['0.5+2.5i', 0.5, 2.5],
    ['1+2.5i', 1, 2.5],
    ['1.5+2.5i', 1.5, 2.5],
    ['2+2.5i', 2, 2.5],
    ['2.5+2.5i', 2.5, 2.5],
    ['3+2.5i', 3, 2.5],
    ['3.5+2.5i', 3.5, 2.5],
    ['-2.5+3i', -2.5, 3],
    ['-2.5+3i', -2.5, 3],
    ['-1.5+3i', -1.5, 3],
    ['-1.5+3i', -1.5, 3],
    ['-0.5+3i', -0.5, 3],
    ['3i', 0, 3],
    ['0.5+3i', 0.5, 3],
    ['1+3i', 1, 3],
    ['1.5+3i', 1.5, 3],
    ['2+3i', 2, 3],
    ['2.5+3i', 2.5, 3],
    ['3+3i', 3, 3],
    ['3.5+3i', 3.5, 3],
    ['-2.5+3.5i', -2.5, 3.5],
    ['-2.5+3.5i', -2.5, 3.5],
    ['-1.5+3.5i', -1.5, 3.5],
    ['-1.5+3.5i', -1.5, 3.5],
    ['-0.5+3.5i', -0.5, 3.5],
    ['3.5i', 0, 3.5],
    ['0.5+3.5i', 0.5, 3.5],
    ['1+3.5i', 1, 3.5],
    ['1.5+3.5i', 1.5, 3.5],
    ['2+3.5i', 2, 3.5],
    ['2.5+3.5i', 2.5, 3.5],
    ['3+3.5i', 3, 3.5],
    ['3.5+3.5i', 3.5, 3.5],
    ['-2.5-2.5i', -2.5, -2.5, 'i'],
    ['-2.5-2.5i', -2.5, -2.5, 'i'],
    ['-1.5-2.5i', -1.5, -2.5, 'i'],
    ['-1.5-2.5i', -1.5, -2.5, 'i'],
    ['-0.5-2.5i', -0.5, -2.5, 'i'],
    ['-2.5i', 0, -2.5, 'i'],
    ['0.5-2.5i', 0.5, -2.5, 'i'],
    ['1-2.5i', 1, -2.5, 'i'],
    ['1.5-2.5i', 1.5, -2.5, 'i'],
    ['2-2.5i', 2, -2.5, 'i'],
    ['2.5-2.5i', 2.5, -2.5, 'i'],
    ['3-2.5i', 3, -2.5, 'i'],
    ['3.5-2.5i', 3.5, -2.5, 'i'],
    ['-2.5-2.5i', -2.5, -2.5, 'i'],
    ['-1.5-2.5i', -1.5, -2.5, 'i'],
    ['-0.5-2.5i', -0.5, -2.5, 'i'],
    ['-2.5i', 0, -2.5, 'i'],
    ['1-2.5i', 1, -2.5, 'i'],
    ['1.5-2.5i', 1.5, -2.5, 'i'],
    ['2-2.5i', 2, -2.5, 'i'],
    ['3-2.5i', 3, -2.5, 'i'],
    ['3.5-2.5i', 3.5, -2.5, 'i'],
    ['-2.5-1.5i', -2.5, -1.5, 'i'],
    ['-1.5-1.5i', -1.5, -1.5, 'i'],
    ['-0.5-1.5i', -0.5, -1.5, 'i'],
    ['-1.5i', 0, -1.5, 'i'],
    ['0.5-1.5i', 0.5, -1.5, 'i'],
    ['1-1.5i', 1, -1.5, 'i'],
    ['1.5-1.5i', 1.5, -1.5, 'i'],
    ['2-1.5i', 2, -1.5, 'i'],
    ['2.5-1.5i', 2.5, -1.5, 'i'],
    ['3-1.5i', 3, -1.5, 'i'],
    ['3.5-1.5i', 3.5, -1.5, 'i'],
    ['-2.5-1.5i', -2.5, -1.5, 'i'],
    ['-1.5-1.5i', -1.5, -1.5, 'i'],
    ['-0.5-1.5i', -0.5, -1.5, 'i'],
    ['-1.5i', 0, -1.5, 'i'],
    ['0.5-1.5i', 0.5, -1.5, 'i'],
    ['1-1.5i', 1, -1.5, 'i'],
    ['1.5-1.5i', 1.5, -1.5, 'i'],
    ['2-1.5i', 2, -1.5, 'i'],
    ['2.5-1.5i', 2.5, -1.5, 'i'],
    ['3-1.5i', 3, -1.5, 'i'],
    ['3.5-1.5i', 3.5, -1.5, 'i'],
    ['-2.5-0.5i', -2.5, -0.5, 'i'],
    ['-1.5-0.5i', -1.5, -0.5, 'i'],
    ['-0.5-0.5i', -0.5, -0.5, 'i'],
    ['-0.5i', 0, -0.5, 'i'],
    ['0.5-0.5i', 0.5, -0.5, 'i'],
    ['1-0.5i', 1, -0.5, 'i'],
    ['1.5-0.5i', 1.5, -0.5, 'i'],
    ['2-0.5i', 2, -0.5, 'i'],
    ['2.5-0.5i', 2.5, -0.5, 'i'],
    ['3-0.5i', 3, -0.5, 'i'],
    ['3.5-0.5i', 3.5, -0.5, 'i'],
    ['-2.5', -2.5, 0, 'i'],
    ['-2.5', -2.5, 0, 'i'],
    ['-1.5', -1.5, 0, 'i'],
    ['-1.5', -1.5, 0, 'i'],
    ['-0.5', -0.5, 0, 'i'],
    ['0.0', 0, 0, 'i'],
    ['0.5', 0.5, 0, 'i'],
    ['1', 1, 0, 'i'],
    ['1.5', 1.5, 0, 'i'],
    ['2', 2, 0, 'i'],
    ['2.5', 2.5, 0, 'i'],
    ['3', 3, 0, 'i'],
    ['3.5', 3.5, 0, 'i'],
    ['-2.5+0.5i', -2.5, 0.5, 'i'],
    ['-2.5+0.5i', -2.5, 0.5, 'i'],
    ['-1.5+0.5i', -1.5, 0.5, 'i'],
    ['-1.5+0.5i', -1.5, 0.5, 'i'],
    ['-0.5+0.5i', -0.5, 0.5, 'i'],
    ['0.5i', 0, 0.5, 'i'],
    ['0.5+0.5i', 0.5, 0.5, 'i'],
    ['1+0.5i', 1, 0.5, 'i'],
    ['1.5+0.5i', 1.5, 0.5, 'i'],
    ['2+0.5i', 2, 0.5, 'i'],
    ['2.5+0.5i', 2.5, 0.5, 'i'],
    ['3+0.5i', 3, 0.5, 'i'],
    ['3.5+0.5i', 3.5, 0.5, 'i'],
    ['-2.5+i', -2.5, 1, 'i'],
    ['-2.5+i', -2.5, 1, 'i'],
    ['-1.5+i', -1.5, 1, 'i'],
    ['-1.5+i', -1.5, 1, 'i'],
    ['-0.5+i', -0.5, 1, 'i'],
    ['i', 0, 1, 'i'],
    ['0.5+i', 0.5, 1, 'i'],
    ['1+i', 1, 1, 'i'],
    ['1.5+i', 1.5, 1, 'i'],
    ['2+i', 2, 1, 'i'],
    ['2.5+i', 2.5, 1, 'i'],
    ['3+i', 3, 1, 'i'],
    ['3.5+i', 3.5, 1, 'i'],
    ['-2.5+1.5i', -2.5, 1.5, 'i'],
    ['-2.5+1.5i', -2.5, 1.5, 'i'],
    ['-1.5+1.5i', -1.5, 1.5, 'i'],
    ['-1.5+1.5i', -1.5, 1.5, 'i'],
    ['-0.5+1.5i', -0.5, 1.5, 'i'],
    ['1.5i', 0, 1.5, 'i'],
    ['0.5+1.5i', 0.5, 1.5, 'i'],
    ['1+1.5i', 1, 1.5, 'i'],
    ['1.5+1.5i', 1.5, 1.5, 'i'],
    ['2+1.5i', 2, 1.5, 'i'],
    ['2.5+1.5i', 2.5, 1.5, 'i'],
    ['3+1.5i', 3, 1.5, 'i'],
    ['3.5+1.5i', 3.5, 1.5, 'i'],
    ['-2.5+2i', -2.5, 2, 'i'],
    ['-2.5+2i', -2.5, 2, 'i'],
    ['-1.5+2i', -1.5, 2, 'i'],
    ['-1.5+2i', -1.5, 2, 'i'],
    ['-0.5+2i', -0.5, 2, 'i'],
    ['2i', 0, 2, 'i'],
    ['0.5+2i', 0.5, 2, 'i'],
    ['1+2i', 1, 2, 'i'],
    ['1.5+2i', 1.5, 2, 'i'],
    ['2+2i', 2, 2, 'i'],
    ['2.5+2i', 2.5, 2, 'i'],
    ['3+2i', 3, 2, 'i'],
    ['3.5+2i', 3.5, 2, 'i'],
    ['-2.5+2.5i', -2.5, 2.5, 'i'],
    ['-2.5+2.5i', -2.5, 2.5, 'i'],
    ['-1.5+2.5i', -1.5, 2.5, 'i'],
    ['-1.5+2.5i', -1.5, 2.5, 'i'],
    ['-0.5+2.5i', -0.5, 2.5, 'i'],
    ['2.5i', 0, 2.5, 'i'],
    ['0.5+2.5i', 0.5, 2.5, 'i'],
    ['1+2.5i', 1, 2.5, 'i'],
    ['1.5+2.5i', 1.5, 2.5, 'i'],
    ['2+2.5i', 2, 2.5, 'i'],
    ['2.5+2.5i', 2.5, 2.5, 'i'],
    ['3+2.5i', 3, 2.5, 'i'],
    ['3.5+2.5i', 3.5, 2.5, 'i'],
    ['-2.5+3i', -2.5, 3, 'i'],
    ['-2.5+3i', -2.5, 3, 'i'],
    ['-1.5+3i', -1.5, 3, 'i'],
    ['-1.5+3i', -1.5, 3, 'i'],
    ['-0.5+3i', -0.5, 3, 'i'],
    ['3i', 0, 3, 'i'],
    ['0.5+3i', 0.5, 3, 'i'],
    ['1+3i', 1, 3, 'i'],
    ['1.5+3i', 1.5, 3, 'i'],
    ['2+3i', 2, 3, 'i'],
    ['2.5+3i', 2.5, 3, 'i'],
    ['3+3i', 3, 3, 'i'],
    ['3.5+3i', 3.5, 3, 'i'],
    ['-2.5+3.5i', -2.5, 3.5, 'i'],
    ['-2.5+3.5i', -2.5, 3.5, 'i'],
    ['-1.5+3.5i', -1.5, 3.5, 'i'],
    ['-1.5+3.5i', -1.5, 3.5, 'i'],
    ['-0.5+3.5i', -0.5, 3.5, 'i'],
    ['3.5i', 0, 3.5, 'i'],
    ['0.5+3.5i', 0.5, 3.5, 'i'],
    ['1+3.5i', 1, 3.5, 'i'],
    ['1.5+3.5i', 1.5, 3.5, 'i'],
    ['2+3.5i', 2, 3.5, 'i'],
    ['2.5+3.5i', 2.5, 3.5, 'i'],
    ['3+3.5i', 3, 3.5, 'i'],
    ['3.5+3.5i', 3.5, 3.5, 'i'],
    ['-2.5-2.5j', -2.5, -2.5, 'j'],
    ['-2.5-2.5j', -2.5, -2.5, 'j'],
    ['-1.5-2.5j', -1.5, -2.5, 'j'],
    ['-1.5-2.5j', -1.5, -2.5, 'j'],
    ['-0.5-2.5j', -0.5, -2.5, 'j'],
    ['-2.5j', 0, -2.5, 'j'],
    ['0.5-2.5j', 0.5, -2.5, 'j'],
    ['1-2.5j', 1, -2.5, 'j'],
    ['1.5-2.5j', 1.5, -2.5, 'j'],
    ['2-2.5j', 2, -2.5, 'j'],
    ['2.5-2.5j', 2.5, -2.5, 'j'],
    ['3-2.5j', 3, -2.5, 'j'],
    ['3.5-2.5j', 3.5, -2.5, 'j'],
    ['-2.5-2.5j', -2.5, -2.5, 'j'],
    ['-2.5-2.5j', -2.5, -2.5, 'j'],
    ['-1.5-2.5j', -1.5, -2.5, 'j'],
    ['-1.5-2.5j', -1.5, -2.5, 'j'],
    ['-0.5-2.5j', -0.5, -2.5, 'j'],
    ['-2.5j', 0, -2.5, 'j'],
    ['0.5-2.5j', 0.5, -2.5, 'j'],
    ['1-2.5j', 1, -2.5, 'j'],
    ['1.5-2.5j', 1.5, -2.5, 'j'],
    ['2-2.5j', 2, -2.5, 'j'],
    ['2.5-2.5j', 2.5, -2.5, 'j'],
    ['3-2.5j', 3, -2.5, 'j'],
    ['3.5-2.5j', 3.5, -2.5, 'j'],
    ['-2.5-1.5j', -2.5, -1.5, 'j'],
    ['-2.5-1.5j', -2.5, -1.5, 'j'],
    ['-1.5-1.5j', -1.5, -1.5, 'j'],
    ['-1.5-1.5j', -1.5, -1.5, 'j'],
    ['-0.5-1.5j', -0.5, -1.5, 'j'],
    ['-1.5j', 0, -1.5, 'j'],
    ['0.5-1.5j', 0.5, -1.5, 'j'],
    ['1-1.5j', 1, -1.5, 'j'],
    ['1.5-1.5j', 1.5, -1.5, 'j'],
    ['2-1.5j', 2, -1.5, 'j'],
    ['2.5-1.5j', 2.5, -1.5, 'j'],
    ['3-1.5j', 3, -1.5, 'j'],
    ['3.5-1.5j', 3.5, -1.5, 'j'],
    ['-2.5-1.5j', -2.5, -1.5, 'j'],
    ['-2.5-1.5j', -2.5, -1.5, 'j'],
    ['-1.5-1.5j', -1.5, -1.5, 'j'],
    ['-1.5-1.5j', -1.5, -1.5, 'j'],
    ['-0.5-1.5j', -0.5, -1.5, 'j'],
    ['-1.5j', 0, -1.5, 'j'],
    ['0.5-1.5j', 0.5, -1.5, 'j'],
    ['1-1.5j', 1, -1.5, 'j'],
    ['1.5-1.5j', 1.5, -1.5, 'j'],
    ['2-1.5j', 2, -1.5, 'j'],
    ['2.5-1.5j', 2.5, -1.5, 'j'],
    ['3-1.5j', 3, -1.5, 'j'],
    ['3.5-1.5j', 3.5, -1.5, 'j'],
    ['-2.5-0.5j', -2.5, -0.5, 'j'],
    ['-2.5-0.5j', -2.5, -0.5, 'j'],
    ['-1.5-0.5j', -1.5, -0.5, 'j'],
    ['-1.5-0.5j', -1.5, -0.5, 'j'],
    ['-0.5-0.5j', -0.5, -0.5, 'j'],
    ['-0.5j', 0, -0.5, 'j'],
    ['0.5-0.5j', 0.5, -0.5, 'j'],
    ['1-0.5j', 1, -0.5, 'j'],
    ['1.5-0.5j', 1.5, -0.5, 'j'],
    ['2-0.5j', 2, -0.5, 'j'],
    ['2.5-0.5j', 2.5, -0.5, 'j'],
    ['3-0.5j', 3, -0.5, 'j'],
    ['3.5-0.5j', 3.5, -0.5, 'j'],
    ['-2.5', -2.5, 0, 'j'],
    ['-2.5', -2.5, 0, 'j'],
    ['-1.5', -1.5, 0, 'j'],
    ['-1.5', -1.5, 0, 'j'],
    ['-0.5', -0.5, 0, 'j'],
    ['0.0', 0, 0, 'j'],
    ['0.5', 0.5, 0, 'j'],
    ['1', 1, 0, 'j'],
    ['1.5', 1.5, 0, 'j'],
    ['2', 2, 0, 'j'],
    ['2.5', 2.5, 0, 'j'],
    ['3', 3, 0, 'j'],
    ['3.5', 3.5, 0, 'j'],
    ['-2.5+0.5j', -2.5, 0.5, 'j'],
    ['-2.5+0.5j', -2.5, 0.5, 'j'],
    ['-1.5+0.5j', -1.5, 0.5, 'j'],
    ['-1.5+0.5j', -1.5, 0.5, 'j'],
    ['-0.5+0.5j', -0.5, 0.5, 'j'],
    ['0.5j', 0, 0.5, 'j'],
    ['0.5+0.5j', 0.5, 0.5, 'j'],
    ['1+0.5j', 1, 0.5, 'j'],
    ['1.5+0.5j', 1.5, 0.5, 'j'],
    ['2+0.5j', 2, 0.5, 'j'],
    ['2.5+0.5j', 2.5, 0.5, 'j'],
    ['3+0.5j', 3, 0.5, 'j'],
    ['3.5+0.5j', 3.5, 0.5, 'j'],
    ['-2.5+j', -2.5, 1, 'j'],
    ['-2.5+j', -2.5, 1, 'j'],
    ['-1.5+j', -1.5, 1, 'j'],
    ['-1.5+j', -1.5, 1, 'j'],
    ['-0.5+j', -0.5, 1, 'j'],
    ['j', 0, 1, 'j'],
    ['0.5+j', 0.5, 1, 'j'],
    ['1+j', 1, 1, 'j'],
    ['1.5+j', 1.5, 1, 'j'],
    ['2+j', 2, 1, 'j'],
    ['2.5+j', 2.5, 1, 'j'],
    ['3+j', 3, 1, 'j'],
    ['3.5+j', 3.5, 1, 'j'],
    ['-2.5+1.5j', -2.5, 1.5, 'j'],
    ['-2.5+1.5j', -2.5, 1.5, 'j'],
    ['-1.5+1.5j', -1.5, 1.5, 'j'],
    ['-1.5+1.5j', -1.5, 1.5, 'j'],
    ['-0.5+1.5j', -0.5, 1.5, 'j'],
    ['1.5j', 0, 1.5, 'j'],
    ['0.5+1.5j', 0.5, 1.5, 'j'],
    ['1+1.5j', 1, 1.5, 'j'],
    ['1.5+1.5j', 1.5, 1.5, 'j'],
    ['2+1.5j', 2, 1.5, 'j'],
    ['2.5+1.5j', 2.5, 1.5, 'j'],
    ['3+1.5j', 3, 1.5, 'j'],
    ['3.5+1.5j', 3.5, 1.5, 'j'],
    ['-2.5+2j', -2.5, 2, 'j'],
    ['-2.5+2j', -2.5, 2, 'j'],
    ['-1.5+2j', -1.5, 2, 'j'],
    ['-1.5+2j', -1.5, 2, 'j'],
    ['-0.5+2j', -0.5, 2, 'j'],
    ['2j', 0, 2, 'j'],
    ['0.5+2j', 0.5, 2, 'j'],
    ['1+2j', 1, 2, 'j'],
    ['1.5+2j', 1.5, 2, 'j'],
    ['2+2j', 2, 2, 'j'],
    ['2.5+2j', 2.5, 2, 'j'],
    ['3+2j', 3, 2, 'j'],
    ['3.5+2j', 3.5, 2, 'j'],
    ['-2.5+2.5j', -2.5, 2.5, 'j'],
    ['-2.5+2.5j', -2.5, 2.5, 'j'],
    ['-1.5+2.5j', -1.5, 2.5, 'j'],
    ['-1.5+2.5j', -1.5, 2.5, 'j'],
    ['-0.5+2.5j', -0.5, 2.5, 'j'],
    ['2.5j', 0, 2.5, 'j'],
    ['0.5+2.5j', 0.5, 2.5, 'j'],
    ['1+2.5j', 1, 2.5, 'j'],
    ['1.5+2.5j', 1.5, 2.5, 'j'],
    ['2+2.5j', 2, 2.5, 'j'],
    ['2.5+2.5j', 2.5, 2.5, 'j'],
    ['3+2.5j', 3, 2.5, 'j'],
    ['3.5+2.5j', 3.5, 2.5, 'j'],
    ['-2.5+3j', -2.5, 3, 'j'],
    ['-2.5+3j', -2.5, 3, 'j'],
    ['-1.5+3j', -1.5, 3, 'j'],
    ['-1.5+3j', -1.5, 3, 'j'],
    ['-0.5+3j', -0.5, 3, 'j'],
    ['3j', 0, 3, 'j'],
    ['0.5+3j', 0.5, 3, 'j'],
    ['1+3j', 1, 3, 'j'],
    ['1.5+3j', 1.5, 3, 'j'],
    ['2+3j', 2, 3, 'j'],
    ['2.5+3j', 2.5, 3, 'j'],
    ['3+3j', 3, 3, 'j'],
    ['3.5+3j', 3.5, 3, 'j'],
    ['-2.5+3.5j', -2.5, 3.5, 'j'],
    ['-2.5+3.5j', -2.5, 3.5, 'j'],
    ['-1.5+3.5j', -1.5, 3.5, 'j'],
    ['-1.5+3.5j', -1.5, 3.5, 'j'],
    ['-0.5+3.5j', -0.5, 3.5, 'j'],
    ['3.5j', 0, 3.5, 'j'],
    ['0.5+3.5j', 0.5, 3.5, 'j'],
    ['1+3.5j', 1, 3.5, 'j'],
    ['1.5+3.5j', 1.5, 3.5, 'j'],
    ['2+3.5j', 2, 3.5, 'j'],
    ['2.5+3.5j', 2.5, 3.5, 'j'],
    ['3+3.5j', 3, 3.5, 'j'],
    ['3.5+3.5j', 3.5, 3.5, 'j'],
    ['-1.23-4.56i', -1.23, -4.56],
    ['-3.21i', 0, -3.21, 'i'],
    ['1.23-2.34j', 1.23, -2.34, 'j'],
    ['-1.23', -1.23, 0],
    ['0.0', 0, 0, 'i'],
    ['1.23', 1.23, 0, 'j'],
    ['-1.23+4.56i', -1.23, 4.56],
    ['3.21i', 0, 3.21, 'i'],
    ['1.23+2.34j', 1.23, 2.34, 'j'],
];
