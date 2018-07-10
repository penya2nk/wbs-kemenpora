// Navigation Arrow To Top

$(document).ready(function() {
            
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            
            
            $().UItoTop({ easingType: 'easeOutQuart' });
            
        });

// Delete Confirmation Modal

$(document).ready(function() {

		$('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
            
            //$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
        });

 });


/**
 * Remove all filtering that has been applied to a DataTable, be it column
 * based filtering or global filtering.
 *
 * DataTables 1.10+ new API can achieve the same effect as this plug-in, without
 * the requirement for plug-ins using the following chaining:
 *
 * ```js
 * var table = $('#example').DataTable();
 * table
 *   .search( '' )
 *   .columns().search( '' )
 *   .draw();
 * ```
 *
 * Please use the new API in DataTables 1.10+ is you are able to do so.
 *
 *  @name fnFilterClear
 *  @summary Remove all column and global filters applied to a table
 *  @author [Allan Jardine](http://sprymedia.co.uk)
 *  @deprecated
 *
 *  @example
 *    $(document).ready(function() {
 *        var table = $('#example').dataTable();
 *         
 *        // Perform a filter
 *        table.fnFilter('Win');
 *        table.fnFilter('Trident', 0);
 *         
 *        // Remove all filtering
 *        table.fnFilterClear();
 *    } );
 */

jQuery.fn.dataTableExt.oApi.fnFilterClear  = function ( oSettings )
{
    var i, iLen;

    /* Remove global filter */
    oSettings.oPreviousSearch.sSearch = "";

    /* Remove the text of the global filter in the input boxes */
    if ( typeof oSettings.aanFeatures.f != 'undefined' )
    {
        var n = oSettings.aanFeatures.f;
        for ( i=0, iLen=n.length ; i<iLen ; i++ )
        {
            $('input', n[i]).val( '' );
        }
    }

    /* Remove the search text for the column filters - NOTE - if you have input boxes for these
     * filters, these will need to be reset
     */
    for ( i=0, iLen=oSettings.aoPreSearchCols.length ; i<iLen ; i++ )
    {
        oSettings.aoPreSearchCols[i].sSearch = "";
    }

    /* Redraw */
    oSettings.oApi._fnReDraw( oSettings );
};

