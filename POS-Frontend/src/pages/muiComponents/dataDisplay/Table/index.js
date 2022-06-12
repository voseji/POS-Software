import React from 'react';
import AppComponentHeader from '../../../../@crema/core/AppComponentHeader';
import AppGridContainer from '../../../../@crema/core/AppGridContainer';
import Grid from '@mui/material/Grid';
import AppComponentCard from '../../../../@crema/core/AppComponentCard';

// import BasicTable from './BasicTable';
// import BasicTableSource from '!raw-loader!./BasicTable';

// import DataTable from './DataTable';
// import DataTableSource from '!raw-loader!./DataTable';

// import DenseTable from './DenseTable';
// import DenseTableSource from '!raw-loader!./DenseTable';

import EnhancedTable from './EnhancedTable';
import EnhancedTableSource from '!raw-loader!./EnhancedTable';

// import ColumnGrouping from './ColumnGrouping';
// import ColumnGroupingSource from '!raw-loader!./ColumnGrouping';

// import CustomPaginationActionsTable from './Custompaginationactions';
// import CustomPaginationActionsTableSource from '!raw-loader!./Custompaginationactions';

// import StickyHeadTable from './StickyHeadTable';
// import StickyHeadTableSource from '!raw-loader!./StickyHeadTable';

// import ColumnGroupingTable from './ColumnGroupingTable';
// import ColumnGroupingTableSource from '!raw-loader!./ColumnGroupingTable';

// import CollapsibleTable from './CollapsibleTable';
// import CollapsibleTableSource from '!raw-loader!./CollapsibleTable';

// import SpanningTable from './SpanningTable';
// import SpanningTableSource from '!raw-loader!./SpanningTable';

// import AcccessibleTable from './AcccessibleTable';
// import AcccessibleTableSource from '!raw-loader!./AcccessibleTable';

const Table = () => {
  return (
    <>
      <AppComponentHeader
        title='Table'
        description='Tables display sets of data. They can be fully customized.'
        refUrl='https://mui.com/components/tables/'
      />
    <AppGridContainer>
      <Grid item xs={12}>
          <AppComponentCard
            title='Enhanced Table'
            component={EnhancedTable}
            source={EnhancedTableSource}
            noScrollbar
            description='This example demonstrates the use of Checkbox and clickable rows for selection, with a custom Toolbar. It uses the TableSortLabel component to help style column headings.'
          />
        </Grid>
        </AppGridContainer>
    </>
  );
};

export default Table;
