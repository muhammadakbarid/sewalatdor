<!DOCTYPE html>
<html>
<head>
    <title>Tittle</title>
    <style type="text/css" media="print">
    @page {
        margin: 0;  /* this affects the margin in the printer settings */
    }
      table{
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
      }
      table th{
          -webkit-print-color-adjust:exact;
        border: 1px solid;

                padding-top: 11px;
    padding-bottom: 11px;
    background-color: #a29bfe;
      }
   table td{
        border: 1px solid;

   }
        </style>
</head>
<body>
    <h3 align="center">DATA View Detail Sewa</h3>
    <h4>Tanggal Cetak : <?= date("d/M/Y");?> </h4>
    <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Barang</th>
		<th>Harga Sewa</th>
		<th>Jumlah Barang</th>
		<th>Total Harga Sewa</th>
		
            </tr><?php
            foreach ($view_detail_sewa_data as $view_detail_sewa)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $view_detail_sewa->nama_barang ?></td>
		      <td><?php echo $view_detail_sewa->harga_sewa ?></td>
		      <td><?php echo $view_detail_sewa->jumlah_barang ?></td>
		      <td><?php echo $view_detail_sewa->total_harga_sewa ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
</body>
<script type="text/javascript">
      window.print()
    </script>
</html>