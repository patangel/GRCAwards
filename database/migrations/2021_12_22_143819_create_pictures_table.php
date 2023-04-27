<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('award_program_id');
            $table->foreign('award_program_id')->references('id')->on('award_programs')->onDelete('cascade');
            $table->string('name');
            $table->timestamps();
        });
        
        $pictures = [
            ['award_program_id'=> 1, 'name'=>'DP0J1703.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1704.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1705.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1707.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1709.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1710.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1713.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1715.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1716.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1717.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1718.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1719.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1720.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1722.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1726.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1727.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1728.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1731.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1732.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1733.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1738.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1739.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1740.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1742.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1743.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1744.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1745.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1746.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1747.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1748.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1749.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1751.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1754.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1756.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1759.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1760.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1761.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1764.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1771.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1773.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1779.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1780.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1784.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1785.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1787.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1789.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1795.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1800.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1801.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1803.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1804.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1806.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1807.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1808.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1810.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1811.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1812.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1814.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1815.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1817.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1821.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1822.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1823.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1826.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1830.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1831.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1833.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1834.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1835.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1836.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1837.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1841.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1842.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1843.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1845.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1846.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1847.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1848.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1850.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1851.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1853.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1854.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1856.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1858.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1860.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1862.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1863.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1864.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1865.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1866.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1868.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1871.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1872.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1877.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1881.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1882.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1883.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1885.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1888.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1890.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1893.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1895.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1896.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1897.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1898.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1901.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1902.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1903.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1905.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1907.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1908.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1911.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1912.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1914.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1917.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1921.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1923.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1924.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1925.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1927.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1928.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1929.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1930.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1932.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1935.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1936.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1938.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1947.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1949.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1950.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1952.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1953.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1954.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1956.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1958.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1965.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1967.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1969.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1970.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1971.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1973.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1979.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1981.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1984.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1988.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1990.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1991.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1992.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1995.JPG'],['award_program_id'=> 1, 'name'=>'DP0J1997.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J1999.JPG'],['award_program_id'=> 1, 'name'=>'DP0J2001.JPG'],['award_program_id'=> 1, 'name'=>'DP0J2002.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J2005.JPG'],['award_program_id'=> 1, 'name'=>'DP0J2009.JPG'],['award_program_id'=> 1, 'name'=>'DP0J2011.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J2012.JPG'],['award_program_id'=> 1, 'name'=>'DP0J2014.JPG'],['award_program_id'=> 1, 'name'=>'DP0J2015.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J2017.JPG'],['award_program_id'=> 1, 'name'=>'DP0J2019.JPG'],['award_program_id'=> 1, 'name'=>'DP0J2020.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J2021.JPG'],['award_program_id'=> 1, 'name'=>'DP0J2022.JPG'],['award_program_id'=> 1, 'name'=>'DP0J2023.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J2024.JPG'],['award_program_id'=> 1, 'name'=>'DP0J2025.JPG'],['award_program_id'=> 1, 'name'=>'DP0J2026.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J2027.JPG'],['award_program_id'=> 1, 'name'=>'DP0J2028.JPG'],['award_program_id'=> 1, 'name'=>'DP0J2029.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J2033.JPG'],['award_program_id'=> 1, 'name'=>'DP0J2037.JPG'],['award_program_id'=> 1, 'name'=>'DP0J2039.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J2041.JPG'],['award_program_id'=> 1, 'name'=>'DP0J2043.JPG'],['award_program_id'=> 1, 'name'=>'DP0J2045.JPG'],
            ['award_program_id'=> 1, 'name'=>'DP0J2046.JPG'],['award_program_id'=> 1, 'name'=>'DP0J2047.JPG']
        ];
        foreach($pictures as $picture){

            DB::table('pictures')->insert($picture);
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pictures');
    }
}
